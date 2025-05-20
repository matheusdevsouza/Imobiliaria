<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-8" id="page-title">Área do Parceiro</h1>
            <p class="text-xl text-blue-100">Acesse sua área exclusiva e gerencie seus negócios</p>
        </div>
    </div>
</section>

<!-- Login Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto">
            <div class="bg-gray-50 p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
                <form id="login-form" class="space-y-6">
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">E-mail</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="senha" class="block text-gray-700 mb-2">Senha</label>
                        <input type="password" id="senha" name="senha" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="lembrar" name="lembrar" class="h-4 w-4 text-blue-900">
                            <label for="lembrar" class="ml-2 text-gray-700">Lembrar-me</label>
                        </div>
                        <a href="#" class="text-blue-900 hover:text-blue-800">Esqueceu a senha?</a>
                    </div>
                    <button type="submit" class="w-full bg-blue-900 text-white py-4 rounded-lg font-bold hover:bg-blue-800 transition duration-300">
                        Entrar
                    </button>
                </form>
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
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your login logic here
        alert('Login realizado com sucesso!');
        this.reset();
    });
</script>

<?php include 'includes/footer.php'; ?> 