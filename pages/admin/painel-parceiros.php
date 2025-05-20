<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Parceiros - Correspondente Bancário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.x.x/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.x.x/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.x.x/firebase-storage-compat.js"></script>
</head>
<body class="bg-gray-50">

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Propostas -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Propostas</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">ID</th>
                                <th class="px-4 py-2 text-left">Cliente</th>
                                <th class="px-4 py-2 text-left">Status</th>
                                <th class="px-4 py-2 text-left">Data</th>
                                <th class="px-4 py-2 text-left">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="propostas-table">
                            <!-- Propostas serão inseridas aqui via JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Upload de Documentos -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Upload de Documentos</h2>
                <form id="upload-form" class="space-y-6">
                    <div>
                        <label for="proposta-id" class="block text-gray-700 mb-2">ID da Proposta</label>
                        <input type="text" id="proposta-id" name="proposta-id" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="documento" class="block text-gray-700 mb-2">Documento (PDF/JPG, máx. 5MB)</label>
                        <input type="file" id="documento" name="documento" accept=".pdf,.jpg,.jpeg" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="tipo-documento" class="block text-gray-700 mb-2">Tipo de Documento</label>
                        <select id="tipo-documento" name="tipo-documento" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                            <option value="rg">RG</option>
                            <option value="cpf">CPF</option>
                            <option value="comprovante-renda">Comprovante de Renda</option>
                            <option value="comprovante-residencia">Comprovante de Residência</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-blue-800 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition duration-300">
                        Enviar Documento
                    </button>
                </form>

                <!-- Upload Progress -->
                <div id="upload-progress" class="mt-4 hidden">
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div id="progress-bar" class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                    <p id="progress-text" class="text-sm text-gray-600 mt-2">0%</p>
                </div>

                <!-- Error Message -->
                <div id="error-message" class="mt-4 text-red-600 text-center hidden"></div>
            </div>
        </div>
    </main>

    <script>
        // Firebase configuration
        const firebaseConfig = {
            // Your Firebase config object will be here
            // This should be loaded from environment variables in production
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        // Check authentication state
        firebase.auth().onAuthStateChanged((user) => {
            if (!user) {
                // User is not signed in, redirect to login
                window.location.href = 'parceiros.php';
            } else {
                // Update user email display
                document.getElementById('user-email').textContent = user.email;
                // Load proposals
                carregarPropostas();
            }
        });

        // Logout handler
        document.getElementById('logout-btn').addEventListener('click', async () => {
            try {
                await firebase.auth().signOut();
                window.location.href = 'parceiros.php';
            } catch (error) {
                console.error('Erro ao fazer logout:', error);
            }
        });

        // Load proposals from API
        async function carregarPropostas() {
            try {
                const token = await firebase.auth().currentUser.getIdToken();
                const response = await fetch('/api/propostas', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (!response.ok) {
                    throw new Error('Erro ao carregar propostas');
                }

                const propostas = await response.json();
                const tableBody = document.getElementById('propostas-table');
                tableBody.innerHTML = '';

                propostas.forEach(proposta => {
                    const row = document.createElement('tr');
                    row.className = 'border-b hover:bg-gray-50';
                    row.innerHTML = `
                        <td class="px-4 py-2">${proposta.id}</td>
                        <td class="px-4 py-2">${proposta.cliente}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded text-sm ${getStatusClass(proposta.status)}">
                                ${proposta.status}
                            </span>
                        </td>
                        <td class="px-4 py-2">${new Date(proposta.data).toLocaleDateString()}</td>
                        <td class="px-4 py-2">
                            <button onclick="visualizarProposta('${proposta.id}')" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            } catch (error) {
                console.error('Erro:', error);
                alert('Erro ao carregar propostas. Tente novamente.');
            }
        }

        // Get status class for styling
        function getStatusClass(status) {
            switch (status.toLowerCase()) {
                case 'em análise':
                    return 'bg-yellow-100 text-yellow-800';
                case 'aprovada':
                    return 'bg-green-100 text-green-800';
                case 'rejeitada':
                    return 'bg-red-100 text-red-800';
                default:
                    return 'bg-gray-100 text-gray-800';
            }
        }

        // View proposal details
        function visualizarProposta(id) {
            // Implement proposal details view
            alert(`Visualizar proposta ${id}`);
        }

        // Upload form handler
        document.getElementById('upload-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const propostaId = document.getElementById('proposta-id').value;
            const file = document.getElementById('documento').files[0];
            const tipoDocumento = document.getElementById('tipo-documento').value;
            const errorMessage = document.getElementById('error-message');
            const uploadProgress = document.getElementById('upload-progress');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');

            // Validate file size (5MB max)
            if (file.size > 5 * 1024 * 1024) {
                errorMessage.textContent = 'O arquivo deve ter no máximo 5MB.';
                errorMessage.classList.remove('hidden');
                return;
            }

            // Show progress
            uploadProgress.classList.remove('hidden');
            errorMessage.classList.add('hidden');

            try {
                const token = await firebase.auth().currentUser.getIdToken();
                
                // Upload to Firebase Storage
                const storageRef = firebase.storage().ref();
                const fileRef = storageRef.child(`documentos/${propostaId}/${tipoDocumento}_${file.name}`);
                
                const uploadTask = fileRef.put(file);

                // Monitor upload progress
                uploadTask.on('state_changed',
                    (snapshot) => {
                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                        progressBar.style.width = progress + '%';
                        progressText.textContent = Math.round(progress) + '%';
                    },
                    (error) => {
                        throw error;
                    },
                    async () => {
                        // Upload completed
                        const downloadURL = await uploadTask.snapshot.ref.getDownloadURL();
                        
                        // Save document metadata to API
                        const response = await fetch('/api/documentos', {
                            method: 'POST',
                            headers: {
                                'Authorization': `Bearer ${token}`,
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                propostaId,
                                tipoDocumento,
                                url: downloadURL,
                                nome: file.name
                            })
                        });

                        if (!response.ok) {
                            throw new Error('Erro ao salvar metadados do documento');
                        }

                        // Reset form and hide progress
                        e.target.reset();
                        uploadProgress.classList.add('hidden');
                        alert('Documento enviado com sucesso!');
                    }
                );
            } catch (error) {
                console.error('Erro:', error);
                errorMessage.textContent = 'Erro ao enviar documento. Tente novamente.';
                errorMessage.classList.remove('hidden');
                uploadProgress.classList.add('hidden');
            }
        });
    </script>
</body>
</html> 

<?php include 'includes/footer.php'; ?>