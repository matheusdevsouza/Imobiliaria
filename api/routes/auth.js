const express = require('express');
const admin = require('firebase-admin');
const router = express.Router();

// Login route
router.post('/login', async (req, res) => {
    try {
        const { email, password } = req.body;

        // Verify credentials with Firebase
        const userCredential = await admin.auth().getUserByEmail(email);
        
        // Generate custom token
        const token = await admin.auth().createCustomToken(userCredential.uid);

        res.json({ token });
    } catch (error) {
        console.error('Login error:', error);
        res.status(401).json({ error: 'Credenciais inválidas' });
    }
});

// Logout route
router.post('/logout', async (req, res) => {
    try {
        const { token } = req.body;
        
        // Revoke refresh tokens
        await admin.auth().revokeRefreshTokens(req.user.uid);
        
        res.json({ message: 'Logout realizado com sucesso' });
    } catch (error) {
        console.error('Logout error:', error);
        res.status(500).json({ error: 'Erro ao realizar logout' });
    }
});

module.exports = router; 