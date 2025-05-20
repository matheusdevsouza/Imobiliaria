<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-8" id="page-title">Parcerias</h1>
            <p class="text-xl text-blue-100">Veja o que temos para oferecer aos nossos parceiros</p>
        </div>
    </div>
</section>

<!-- Benefícios Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Benefícios para Parceiros</h2>
            <p class="text-gray-600">Aproveite todas as vantagens de ser nosso parceiro</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-chart-line text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Dashboard Personalizado</h3>
                <p class="text-gray-600 text-center">Acompanhe seus resultados em tempo real com gráficos e relatórios detalhados</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-handshake text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Comissões Atraentes</h3>
                <p class="text-gray-600 text-center">Receba comissões competitivas e pagamentos rápidos</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-headset text-2xl text-blue-900"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-center">Suporte Dedicado</h3>
                <p class="text-gray-600 text-center">Tenha acesso a um time especializado para ajudar em suas operações</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-blue-900 rounded-2xl p-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Quer se tornar um parceiro?</h2>
            <p class="text-xl text-blue-100 mb-8">Junte-se a nós e faça parte do nosso time de sucesso</p>
            <a href="contato.php" class="bg-white text-blue-900 px-8 py-4 rounded-full text-lg font-bold hover:bg-blue-50 transition duration-300 inline-block">
                Fale Conosco
            </a>
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
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your login logic here
        alert('Login realizado com sucesso!');
        this.reset();
    });
</script>

<?php include 'includes/footer.php'; ?> 