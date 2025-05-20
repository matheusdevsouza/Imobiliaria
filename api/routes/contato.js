const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');

// Define Contact Schema
const contatoSchema = new mongoose.Schema({
    nome: { type: String, required: true },
    email: { type: String, required: true },
    mensagem: { type: String, required: true },
    data: { type: Date, default: Date.now },
    status: { 
        type: String, 
        enum: ['Novo', 'Em Atendimento', 'Respondido'],
        default: 'Novo'
    }
});

const Contato = mongoose.model('Contato', contatoSchema);

// Submit contact form
router.post('/', async (req, res) => {
    try {
        const { nome, email, mensagem } = req.body;

        // Validate required fields
        if (!nome || !email || !mensagem) {
            return res.status(400).json({ error: 'Todos os campos são obrigatórios' });
        }

        // Validate email format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            return res.status(400).json({ error: 'E-mail inválido' });
        }

        // Create new contact
        const contato = new Contato({
            nome,
            email,
            mensagem
        });

        await contato.save();

        // Here you could add email notification logic
        // For example, using nodemailer to send an email to the admin

        res.status(201).json({
            message: 'Mensagem enviada com sucesso',
            contato
        });
    } catch (error) {
        console.error('Error submitting contact form:', error);
        res.status(500).json({ error: 'Erro ao enviar mensagem' });
    }
});

// Get all contacts (admin only)
router.get('/', async (req, res) => {
    try {
        const contatos = await Contato.find().sort({ data: -1 });
        res.json(contatos);
    } catch (error) {
        console.error('Error fetching contacts:', error);
        res.status(500).json({ error: 'Erro ao buscar mensagens' });
    }
});

// Update contact status (admin only)
router.put('/:id/status', async (req, res) => {
    try {
        const { status } = req.body;
        
        if (!['Novo', 'Em Atendimento', 'Respondido'].includes(status)) {
            return res.status(400).json({ error: 'Status inválido' });
        }

        const contato = await Contato.findByIdAndUpdate(
            req.params.id,
            { status },
            { new: true }
        );

        if (!contato) {
            return res.status(404).json({ error: 'Mensagem não encontrada' });
        }

        res.json(contato);
    } catch (error) {
        console.error('Error updating contact status:', error);
        res.status(500).json({ error: 'Erro ao atualizar status da mensagem' });
    }
});

module.exports = router; 