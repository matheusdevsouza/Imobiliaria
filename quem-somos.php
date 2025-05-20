<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-8" id="page-title">Quem Somos</h1>
            <p class="text-xl text-blue-100">Conheça nossa história e nossa missão de transformar sonhos em realidade</p>
        </div>
    </div>
</section>

<!-- História Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-gray-900">Nossa História</h2>
                <p class="text-gray-600">Fundada em 2008, a Imobiliária Horizonte nasceu com o propósito de facilitar o acesso ao crédito imobiliário para todos os brasileiros. Ao longo de mais de 15 anos, temos ajudado milhares de famílias a realizarem o sonho da casa própria.</p>
                <p class="text-gray-600">Nossa trajetória é marcada por inovação, transparência e compromisso com nossos clientes. Somos reconhecidos no mercado por oferecer as melhores condições e taxas do mercado, sempre com um atendimento personalizado e humanizado.</p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3" alt="Nossa História" class="rounded-xl shadow-xl">
                <div class="absolute -bottom-6 -left-6 bg-blue-900 text-white p-6 rounded-xl">
                    <p class="text-4xl font-bold">15+</p>
                    <p class="text-sm">Anos de Experiência</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Missão e Valores -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Missão e Valores</h2>
            <p class="text-gray-600">Nossa missão é facilitar o acesso ao crédito imobiliário, oferecendo soluções personalizadas e as melhores condições do mercado.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Compromisso</h3>
                <p class="text-gray-600">Comprometimento total com a satisfação dos nossos clientes e parceiros.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Transparência</h3>
                <p class="text-gray-600">Processos claros e transparentes em todas as nossas operações.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Inovação</h3>
                <p class="text-gray-600">Sempre buscando as melhores soluções e tecnologias para nossos clientes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Equipe -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Nossa Equipe</h2>
            <p class="text-gray-600">Profissionais altamente qualificados e comprometidos com o seu sonho.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl overflow-hidden">
                <img src="CEO.png" alt="CEO" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">João Silva</h3>
                    <p class="text-blue-900 mb-4">CEO</p>
                    <p class="text-gray-600">Mais de 20 anos de experiência no mercado imobiliário.</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl overflow-hidden">
                <img src="MARIA.png" alt="Diretora Comercial" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Maria Santos</h3>
                    <p class="text-blue-900 mb-4">Diretora Comercial</p>
                    <p class="text-gray-600">Especialista em negociações e relacionamento com clientes.</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl overflow-hidden">
                <img src="PEDRO.png" alt="Diretor Financeiro" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Pedro Lima</h3>
                    <p class="text-blue-900 mb-4">Diretor Financeiro</p>
                    <p class="text-gray-600">Expert em análise de crédito e gestão financeira.</p>
                </div>
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
</script>

<?php include 'includes/footer.php'; ?> 