<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-8" id="page-title">Entre em Contato</h1>
            <p class="text-xl text-blue-100">Estamos aqui para ajudar você a realizar seu sonho</p>
        </div>
    </div>
</section>

<!-- Contato Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Formulário de Contato -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-bold mb-6">Envie sua Mensagem</h2>
                <form id="contato-form" class="space-y-6">
                    <div>
                        <label for="nome" class="block text-gray-700 mb-2">Nome</label>
                        <input type="text" id="nome" name="nome" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">E-mail</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="telefone" class="block text-gray-700 mb-2">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="assunto" class="block text-gray-700 mb-2">Assunto</label>
                        <select id="assunto" name="assunto" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                            <option value="">Selecione um assunto</option>
                            <option value="financiamento">Financiamento Imobiliário</option>
                            <option value="consorcio">Consórcio Imobiliário</option>
                            <option value="simulacao">Simulação de Crédito</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <div>
                        <label for="mensagem" class="block text-gray-700 mb-2">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="4" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-900 text-white py-4 rounded-lg font-bold hover:bg-blue-800 transition duration-300">
                        Enviar Mensagem
                    </button>
                </form>
            </div>

            <!-- Informações de Contato -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold mb-6">Informações de Contato</h2>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Endereço</h3>
                                <p class="text-gray-600">Av. Paulista, 1000 - São Paulo, SP</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Telefone</h3>
                                <p class="text-gray-600">(11) 1234-5678</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">E-mail</h3>
                                <p class="text-gray-600">contato@imobiliaria.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Horário de Atendimento -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Horário de Atendimento</h2>
                    <div class="space-y-1">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Segunda a Sexta</span>
                            <span class="font-bold text-gray-900">09:00 - 18:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sábado</span>
                            <span class="font-bold text-gray-900">09:00 - 13:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Domingo</span>
                            <span class="font-bold text-gray-900">Fechado</span>
                        </div>
                    </div>
                </div>

                <!-- Redes Sociais -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Redes Sociais</h2>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-300">
                            <i class="fab fa-facebook-f text-blue-900"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-300">
                            <i class="fab fa-instagram text-blue-900"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-300">
                            <i class="fab fa-linkedin-in text-blue-900"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-center">Nossa Localização</h2>
            <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0976969061997!2d-46.65390548502172!3d-23.564611267596225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1647881234567!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<script>
    // GSAP Animations
    gsap.from("#page-title", {
        duration: 1,
        y: 30,
        opacity: 0,
        ease: "power3.out"
    });

    gsap.utils.toArray('section').forEach(section => {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });
    });

    // Form submission handler
    document.getElementById('contato-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Mensagem enviada com sucesso!');
        this.reset();
    });
</script>

<?php include 'includes/footer.php'; ?> 