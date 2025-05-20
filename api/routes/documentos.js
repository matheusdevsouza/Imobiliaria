const express = require('express');
const router = express.Router();
const admin = require('firebase-admin');
const multer = require('multer');
const path = require('path');

// Configure multer for memory storage
const upload = multer({
    storage: multer.memoryStorage(),
    limits: {
        fileSize: 5 * 1024 * 1024 // 5MB limit
    },
    fileFilter: (req, file, cb) => {
        // Accept only PDF and JPG files
        const allowedTypes = ['.pdf', '.jpg', '.jpeg'];
        const ext = path.extname(file.originalname).toLowerCase();
        if (allowedTypes.includes(ext)) {
            cb(null, true);
        } else {
            cb(new Error('Tipo de arquivo não permitido. Use PDF ou JPG.'));
        }
    }
});

// Upload document
router.post('/upload', upload.single('documento'), async (req, res) => {
    try {
        if (!req.file) {
            return res.status(400).json({ error: 'Nenhum arquivo enviado' });
        }

        const { propostaId, tipoDocumento } = req.body;
        const file = req.file;

        // Create a unique filename
        const filename = `${propostaId}/${tipoDocumento}_${Date.now()}${path.extname(file.originalname)}`;

        // Upload to Firebase Storage
        const bucket = admin.storage().bucket();
        const fileRef = bucket.file(filename);

        await fileRef.save(file.buffer, {
            metadata: {
                contentType: file.mimetype
            }
        });

        // Get download URL
        const [url] = await fileRef.getSignedUrl({
            action: 'read',
            expires: '03-01-2500' // Long expiration for demo purposes
        });

        // Save document metadata to MongoDB
        const proposta = await mongoose.model('Proposta').findOneAndUpdate(
            { id: propostaId },
            {
                $push: {
                    documentos: {
                        url,
                        nome: file.originalname,
                        tipo: tipoDocumento,
                        data: new Date()
                    }
                }
            },
            { new: true }
        );

        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }

        res.json({
            message: 'Documento enviado com sucesso',
            url,
            proposta
        });
    } catch (error) {
        console.error('Error uploading document:', error);
        res.status(500).json({ error: 'Erro ao enviar documento' });
    }
});

// Get document metadata
router.get('/:propostaId', async (req, res) => {
    try {
        const proposta = await mongoose.model('Proposta').findOne({ id: req.params.propostaId });
        
        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }

        res.json(proposta.documentos);
    } catch (error) {
        console.error('Error fetching documents:', error);
        res.status(500).json({ error: 'Erro ao buscar documentos' });
    }
});

// Delete document
router.delete('/:propostaId/:documentoId', async (req, res) => {
    try {
        const { propostaId, documentoId } = req.params;

        // Get document URL from MongoDB
        const proposta = await mongoose.model('Proposta').findOne({ id: propostaId });
        
        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }

        const documento = proposta.documentos.id(documentoId);
        
        if (!documento) {
            return res.status(404).json({ error: 'Documento não encontrado' });
        }

        // Delete from Firebase Storage
        const bucket = admin.storage().bucket();
        const filename = documento.url.split('/').pop();
        await bucket.file(filename).delete();

        // Remove from MongoDB
        proposta.documentos.pull(documentoId);
        await proposta.save();

        res.json({ message: 'Documento excluído com sucesso' });
    } catch (error) {
        console.error('Error deleting document:', error);
        res.status(500).json({ error: 'Erro ao excluir documento' });
    }
});

module.exports = router; 