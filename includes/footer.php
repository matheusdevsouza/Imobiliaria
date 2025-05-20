    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold"><?php echo $siteName; ?></h3>
                    <p class="text-blue-100">Soluções completas em crédito imobiliário com as melhores taxas do mercado.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-blue-200 transition duration-300">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-blue-200 transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-blue-200 transition duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php#quem-somos" class="text-blue-100 hover:text-white transition duration-300">Quem Somos</a></li>
                        <li><a href="index.php#servicos" class="text-blue-100 hover:text-white transition duration-300">Serviços</a></li>
                        <li><a href="index.php#parceiros" class="text-blue-100 hover:text-white transition duration-300">Parceiros</a></li>
                        <li><a href="index.php#contato" class="text-blue-100 hover:text-white transition duration-300">Contato</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Nossos Serviços</h4>
                    <ul class="space-y-2">
                        <li><a href="simulador.php" class="text-blue-100 hover:text-white transition duration-300">Financiamento Imobiliário</a></li>
                        <li><a href="simulador.php" class="text-blue-100 hover:text-white transition duration-300">Consórcio Imobiliário</a></li>
                        <li><a href="simulador.php" class="text-blue-100 hover:text-white transition duration-300">Simulação de Crédito</a></li>
                        <li><a href="parceiros.php" class="text-blue-100 hover:text-white transition duration-300">Área Parceiros</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Contato</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone"></i>
                            <span class="text-blue-100">(11) 1234-5678</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span class="text-blue-100">contato@imobiliaria.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="text-blue-100">Av. Paulista, 1000 - São Paulo, SP</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-700 mt-12 pt-8 text-center">
                <p class="text-blue-100">&copy; <?php echo date('Y'); ?> <?php echo $siteName; ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // GSAP Animations for Footer
        gsap.from("footer", {
            scrollTrigger: {
                trigger: "footer",
                start: "top bottom",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });

        gsap.from("footer .grid > div", {
            scrollTrigger: {
                trigger: "footer",
                start: "top bottom",
                toggleActions: "play none none reverse"
            },
            y: 30,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });
    </script>
</body>
</html> 