<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-800 opacity-95"></div>
    <div class="absolute inset-0 bg-[url('https://shprime.com.br/blog/wp-content/uploads/2023/05/sean-pollock-PhYq704ffdA-unsplash.jpg')] bg-cover bg-center opacity-50"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-8" id="hero-title">Realize o Sonho da Casa Própria</h1>
        <p class="text-xl md:text-2xl text-blue-100 mb-12" id="hero-subtitle">Soluções completas em crédito imobiliário com as melhores taxas do mercado</p>
        <div class="flex justify-center">
            <a href="simulador.php" class="bg-white text-blue-900 px-8 py-4 rounded-full text-lg font-bold hover:bg-blue-50 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 z-20" id="hero-cta" style="opacity: 1 !important;">
                Simular Agora
            </a>
        </div>
    </div>
</section>

<!-- Números Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center" data-number="5000">
                <h3 class="text-4xl font-bold text-blue-900 mb-2">5.000+</h3>
                <p class="text-gray-600">Clientes Atendidos</p>
            </div>
            <div class="text-center" data-number="1000">
                <h3 class="text-4xl font-bold text-blue-900 mb-2">1.000+</h3>
                <p class="text-gray-600">Imóveis Financiados</p>
            </div>
            <div class="text-center" data-number="15">
                <h3 class="text-4xl font-bold text-blue-900 mb-2">15+</h3>
                <p class="text-gray-600">Anos de Experiência</p>
            </div>
            <div class="text-center" data-number="98">
                <h3 class="text-4xl font-bold text-blue-900 mb-2">98%</h3>
                <p class="text-gray-600">Satisfação dos Clientes</p>
            </div>
        </div>
    </div>
</section>

<!-- Quem Somos -->
<section id="quem-somos" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Quem Somos</h2>
            <p class="text-xl text-gray-600">
                Somos uma imobiliária especializada em crédito imobiliário, com mais de 15 anos de experiência no mercado.
                Nossa missão é facilitar o acesso ao financiamento imobiliário, oferecendo as melhores condições e taxas do mercado.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                <i class="fas fa-handshake text-4xl text-blue-900 mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Compromisso</h3>
                <p class="text-gray-600">Comprometimento total com a satisfação dos nossos clientes.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                <i class="fas fa-chart-line text-4xl text-blue-900 mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Experiência</h3>
                <p class="text-gray-600">Mais de 15 anos de experiência no mercado imobiliário.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                <i class="fas fa-shield-alt text-4xl text-blue-900 mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Segurança</h3>
                <p class="text-gray-600">Processos seguros e transparentes em todas as operações.</p>
            </div>
        </div>
    </div>
</section>

<!-- Serviços -->
<section id="servicos" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Nossos Serviços</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-blue-900 to-blue-800 text-white p-8 rounded-xl">
                <i class="fas fa-home text-4xl mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Financiamento Imobiliário</h3>
                <p>Financiamento para compra de imóveis novos e usados com as melhores taxas do mercado.</p>
            </div>
            <div class="bg-gradient-to-br from-blue-900 to-blue-800 text-white p-8 rounded-xl">
                <i class="fas fa-handshake text-4xl mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Consórcio Imobiliário</h3>
                <p>Consórcio para aquisição de imóveis com parcelas que cabem no seu bolso.</p>
            </div>
            <div class="bg-gradient-to-br from-blue-900 to-blue-800 text-white p-8 rounded-xl">
                <i class="fas fa-calculator text-4xl mb-4"></i>
                <h3 class="text-xl font-bold mb-4">Simulação de Crédito</h3>
                <p>Simule seu financiamento e descubra as melhores condições para seu perfil.</p>
            </div>
        </div>
    </div>
</section>

<!-- Parceiros -->
<section id="parceiros" class="py-20 bg-[color:#F8F9FA]">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">Nossos Parceiros</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div class="relative bg-[color:#FFFFFF] rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-[color:#FFFFFF] to-gray-50 opacity-90"></div>
                <div class="relative flex items-center justify-center h-32 p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Ita%C3%BA_Unibanco_logo_2023.svg/250px-Ita%C3%BA_Unibanco_logo_2023.svg.png" alt="Itaú" class="h-16 object-contain transition-transform duration-300 group-hover:scale-105">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-blue-200/50 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
            </div>
            <div class="relative bg-[color:#FFFFFF] rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-[color:#FFFFFF] to-gray-50 opacity-90"></div>
                <div class="relative flex items-center justify-center h-32 p-6">
                    <img src="https://logodownload.org/wp-content/uploads/2018/09/bradesco-logo-novo-2018.png" alt="Bradesco" class="h-16 object-contain transition-transform duration-300 group-hover:scale-105">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-blue-200/50 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
            </div>
            <div class="relative bg-[color:#FFFFFF] rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-[color:#FFFFFF] to-gray-50 opacity-90"></div>
                <div class="relative flex items-center justify-center h-32 p-6">
                    <img src="https://gerenciamentodeatendimento.com.br/wp-content/uploads/2018/02/logo-specto-case-santander-01.png" alt="Santander" class="h-16 object-contain transition-transform duration-300 group-hover:scale-105">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-blue-200/50 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
            </div>
            <div class="relative bg-[color:#FFFFFF] rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-[color:#FFFFFF] to-gray-50 opacity-90"></div>
                <div class="relative flex items-center justify-center h-32 p-6">
                    <img src="assets/images/CAIXA.png" alt="Caixa" class="h-16 object-contain transition-transform duration-300 group-hover:scale-105">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-blue-200/50 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
            </div>
        </div>
    </div>
</section>

<!-- Depoimentos -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">O Que Dizem Nossos Clientes</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold">JD</div>
                    <div class="ml-4">
                        <h4 class="font-bold">João Silva</h4>
                        <p class="text-gray-600">São Paulo, SP</p>
                    </div>
                </div>
                <p class="text-gray-600">"Processo muito tranquilo e profissional. Consegui o financiamento com as melhores condições do mercado."</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold">MS</div>
                    <div class="ml-4">
                        <h4 class="font-bold">Maria Santos</h4>
                        <p class="text-gray-600">Rio de Janeiro, RJ</p>
                    </div>
                </div>
                <p class="text-gray-600">"Atendimento excelente! Me ajudaram em todo o processo e consegui realizar o sonho da casa própria."</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold">PL</div>
                    <div class="ml-4">
                        <h4 class="font-bold">Pedro Lima</h4>
                        <p class="text-gray-600">Belo Horizonte, MG</p>
                    </div>
                </div>
                <p class="text-gray-600">"Profissionais muito competentes. O simulador me ajudou a entender melhor as condições do financiamento."</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Últimas do Blog</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3" alt="Blog Post" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Como escolher o melhor financiamento imobiliário</h3>
                    <p class="text-gray-600 mb-4">Dicas importantes para escolher o melhor financiamento para seu perfil.</p>
                    <a href="#" class="text-blue-900 font-bold hover:text-blue-700">Ler mais →</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3" alt="Blog Post" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Entenda a diferença entre consórcio e financiamento</h3>
                    <p class="text-gray-600 mb-4">Comparativo detalhado entre as duas opções de aquisição de imóveis.</p>
                    <a href="#" class="text-blue-900 font-bold hover:text-blue-700">Ler mais →</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3" alt="Blog Post" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Dicas para economizar na compra do imóvel</h3>
                    <p class="text-gray-600 mb-4">Estratégias para reduzir custos na aquisição do seu imóvel.</p>
                    <a href="#" class="text-blue-900 font-bold hover:text-blue-700">Ler mais →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contato -->
<section id="contato" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Entre em Contato</h2>
        <div class="max-w-2xl mx-auto">
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
                    <label for="mensagem" class="block text-gray-700 mb-2">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="4" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-900 text-white py-4 rounded-lg font-bold hover:bg-blue-800 transition duration-300">
                    Enviar Mensagem
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .animate-scroll {
        animation: scroll 20s linear infinite;
        display: flex;
        width: max-content;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
    #hero-cta {
        z-index: 20 !important;
        opacity: 1 !important;
        position: relative;
    }
</style>

<script>
    // GSAP Animations
    gsap.from("#hero-title", {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: "power3.out"
    });

    gsap.from("#hero-subtitle", {
        duration: 1,
        y: 30,
        opacity: 0,
        delay: 0.3,
        ease: "power3.out"
    });

    gsap.from("#hero-cta", {
        duration: 1,
        y: 20,
        opacity: 0,
        delay: 0.6,
        ease: "power3.out",
        onComplete: () => {
            document.getElementById("hero-cta").style.opacity = "1";
        }
    });

    // Scroll Animations
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

    // Number Counter Animation
    const numbers = document.querySelectorAll('[data-number]');
    numbers.forEach(number => {
        const target = parseInt(number.getAttribute('data-number'));
        gsap.to(number.querySelector('h3'), {
            scrollTrigger: {
                trigger: number,
                start: "top 80%"
            },
            innerText: target,
            duration: 2,
            snap: { innerText: 1 },
            ease: "power1.out"
        });
    });
</script>

<?php include 'includes/footer.php'; ?>