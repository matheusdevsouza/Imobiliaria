<?php include 'includes/header.php'; ?>

<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-12" id="simulador-title">Simulador de Financiamento</h1>
            
            <div class="bg-white rounded-xl shadow-lg p-8" id="simulador-form">
                <form id="financiamento-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="valor-imovel" class="block text-gray-700 mb-2">Valor do Imóvel (R$)</label>
                            <input type="number" id="valor-imovel" name="valor-imovel" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="entrada" class="block text-gray-700 mb-2">Valor da Entrada (R$)</label>
                            <input type="number" id="entrada" name="entrada" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="prazo" class="block text-gray-700 mb-2">Prazo (anos)</label>
                            <select id="prazo" name="prazo" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                                <option value="">Selecione o prazo</option>
                                <option value="10">10 anos</option>
                                <option value="15">15 anos</option>
                                <option value="20">20 anos</option>
                                <option value="25">25 anos</option>
                                <option value="30">30 anos</option>
                                <option value="35">35 anos</option>
                            </select>
                        </div>
                        <div>
                            <label for="taxa" class="block text-gray-700 mb-2">Taxa de Juros (% a.a.)</label>
                            <input type="number" id="taxa" name="taxa" step="0.01" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-900 text-white py-4 rounded-lg font-bold hover:bg-blue-800 transition duration-300">
                        Calcular Financiamento
                    </button>
                </form>
            </div>

            <div id="resultado" class="mt-8 bg-white rounded-xl shadow-lg p-8 hidden">
                <h2 class="text-2xl font-bold mb-6">Resultado da Simulação</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Valor Financiado</h3>
                        <p id="valor-financiado" class="text-2xl font-bold text-blue-900">R$ 0,00</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Valor da Parcela</h3>
                        <p id="valor-parcela" class="text-2xl font-bold text-blue-900">R$ 0,00</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Total de Juros</h3>
                        <p id="total-juros" class="text-2xl font-bold text-blue-900">R$ 0,00</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Total a Pagar</h3>
                        <p id="total-pagar" class="text-2xl font-bold text-blue-900">R$ 0,00</p>
                    </div>
                </div>
                
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-4">Tabela de Amortização</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2 text-left">Parcela</th>
                                    <th class="px-4 py-2 text-right">Valor</th>
                                    <th class="px-4 py-2 text-right">Amortização</th>
                                    <th class="px-4 py-2 text-right">Juros</th>
                                    <th class="px-4 py-2 text-right">Saldo Devedor</th>
                                </tr>
                            </thead>
                            <tbody id="tabela-amortizacao">
                                <!-- Preenchido via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // GSAP Animations
    gsap.from("#simulador-title", {
        duration: 1,
        y: 30,
        opacity: 0,
        ease: "power3.out"
    });

    gsap.from("#simulador-form", {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 0.3,
        ease: "power3.out"
    });

    // Form submission handler
    document.getElementById('financiamento-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const valorImovel = parseFloat(document.getElementById('valor-imovel').value);
        const entrada = parseFloat(document.getElementById('entrada').value);
        const prazo = parseInt(document.getElementById('prazo').value);
        const taxa = parseFloat(document.getElementById('taxa').value);
        
        // Calculate financing
        const valorFinanciado = valorImovel - entrada;
        const taxaMensal = taxa / 100 / 12;
        const numeroParcelas = prazo * 12;
        
        // Calculate monthly payment using the formula: PMT = PV * (i * (1 + i)^n) / ((1 + i)^n - 1)
        const valorParcela = valorFinanciado * (taxaMensal * Math.pow(1 + taxaMensal, numeroParcelas)) / (Math.pow(1 + taxaMensal, numeroParcelas) - 1);
        
        // Calculate total amount and interest
        const totalPagar = valorParcela * numeroParcelas;
        const totalJuros = totalPagar - valorFinanciado;
        
        // Update result display
        document.getElementById('valor-financiado').textContent = `R$ ${valorFinanciado.toFixed(2)}`;
        document.getElementById('valor-parcela').textContent = `R$ ${valorParcela.toFixed(2)}`;
        document.getElementById('total-juros').textContent = `R$ ${totalJuros.toFixed(2)}`;
        document.getElementById('total-pagar').textContent = `R$ ${totalPagar.toFixed(2)}`;
        
        // Generate amortization table
        let saldoDevedor = valorFinanciado;
        const tabelaAmortizacao = document.getElementById('tabela-amortizacao');
        tabelaAmortizacao.innerHTML = '';
        
        for (let i = 1; i <= numeroParcelas; i++) {
            const juros = saldoDevedor * taxaMensal;
            const amortizacao = valorParcela - juros;
            saldoDevedor -= amortizacao;
            
            const row = document.createElement('tr');
            row.className = i % 2 === 0 ? 'bg-gray-50' : 'bg-white';
            row.innerHTML = `
                <td class="px-4 py-2">${i}</td>
                <td class="px-4 py-2 text-right">R$ ${valorParcela.toFixed(2)}</td>
                <td class="px-4 py-2 text-right">R$ ${amortizacao.toFixed(2)}</td>
                <td class="px-4 py-2 text-right">R$ ${juros.toFixed(2)}</td>
                <td class="px-4 py-2 text-right">R$ ${Math.max(0, saldoDevedor).toFixed(2)}</td>
            `;
            tabelaAmortizacao.appendChild(row);
        }
        
        // Show results with animation
        const resultado = document.getElementById('resultado');
        resultado.classList.remove('hidden');
        gsap.from(resultado, {
            duration: 1,
            y: 30,
            opacity: 0,
            ease: "power3.out"
        });
    });
</script>

<?php include 'includes/footer.php'; ?> 