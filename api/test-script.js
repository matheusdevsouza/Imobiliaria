const axios = require('axios');
require('dotenv').config();

async function testAPI() {
    console.log('=== API Test Script ===\n');

    // Test API Server
    try {
        console.log('Testing API Server...');
        const response = await axios.get('http://localhost:3000/api/auth/ping');
        console.log('✓ API Server is running');
        console.log('Response:', response.data);
    } catch (error) {
        console.error('✗ API Server Error:', error.message);
    }

    // Test MongoDB Connection
    try {
        console.log('\nTesting MongoDB Connection...');
        const response = await axios.get('http://localhost:3000/api/propostas');
        console.log('✓ MongoDB Connection successful');
        console.log('Proposals:', response.data);
    } catch (error) {
        console.error('✗ MongoDB Connection Error:', error.message);
    }

    // Test Firebase Authentication
    try {
        console.log('\nTesting Firebase Authentication...');
        const response = await axios.post('http://localhost:3000/api/auth/login', {
            email: 'test@example.com',
            password: 'test123'
        });
        console.log('✓ Firebase Authentication configured');
        console.log('Token:', response.data.token);
    } catch (error) {
        console.error('✗ Firebase Authentication Error:', error.message);
    }
}

testAPI().catch(console.error); 