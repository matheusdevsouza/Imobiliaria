const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');

// Define Proposal Schema
const propostaSchema = new mongoose.Schema({
    id: { type: String, required: true, unique: true },
    cliente: { type: String, required: true },
    status: { 
        type: String, 
        enum: ['Em Análise', 'Aprovada', 'Rejeitada'],
        default: 'Em Análise'
    },
    data: { type: Date, default: Date.now },
    documentos: [{
        url: String,
        nome: String,
        tipo: String,
        data: { type: Date, default: Date.now }
    }]
});

const Proposta = mongoose.model('Proposta', propostaSchema);

// Get all proposals
router.get('/', async (req, res) => {
    try {
        const propostas = await Proposta.find().sort({ data: -1 });
        res.json(propostas);
    } catch (error) {
        console.error('Error fetching proposals:', error);
        res.status(500).json({ error: 'Erro ao buscar propostas' });
    }
});

// Get single proposal
router.get('/:id', async (req, res) => {
    try {
        const proposta = await Proposta.findOne({ id: req.params.id });
        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }
        res.json(proposta);
    } catch (error) {
        console.error('Error fetching proposal:', error);
        res.status(500).json({ error: 'Erro ao buscar proposta' });
    }
});

// Create new proposal
router.post('/', async (req, res) => {
    try {
        const { cliente } = req.body;
        
        // Generate unique ID
        const id = `PROP${Date.now()}`;
        
        const proposta = new Proposta({
            id,
            cliente,
            status: 'Em Análise'
        });

        await proposta.save();
        res.status(201).json(proposta);
    } catch (error) {
        console.error('Error creating proposal:', error);
        res.status(500).json({ error: 'Erro ao criar proposta' });
    }
});

// Update proposal status
router.put('/:id/status', async (req, res) => {
    try {
        const { status } = req.body;
        
        if (!['Em Análise', 'Aprovada', 'Rejeitada'].includes(status)) {
            return res.status(400).json({ error: 'Status inválido' });
        }

        const proposta = await Proposta.findOneAndUpdate(
            { id: req.params.id },
            { status },
            { new: true }
        );

        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }

        res.json(proposta);
    } catch (error) {
        console.error('Error updating proposal status:', error);
        res.status(500).json({ error: 'Erro ao atualizar status da proposta' });
    }
});

// Add document to proposal
router.post('/:id/documentos', async (req, res) => {
    try {
        const { url, nome, tipo } = req.body;

        const proposta = await Proposta.findOneAndUpdate(
            { id: req.params.id },
            {
                $push: {
                    documentos: {
                        url,
                        nome,
                        tipo,
                        data: new Date()
                    }
                }
            },
            { new: true }
        );

        if (!proposta) {
            return res.status(404).json({ error: 'Proposta não encontrada' });
        }

        res.json(proposta);
    } catch (error) {
        console.error('Error adding document:', error);
        res.status(500).json({ error: 'Erro ao adicionar documento' });
    }
});

module.exports = router; 