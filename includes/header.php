<?php
$siteName = "Imobiliária";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?> - Crédito Imobiliário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link rel="shortcut icon" href="IMOBILIARIA LOGO.png" type="image/x-icon">
    <style>
        .header-scrolled {
            background: rgba(30, 58, 138, 0.95);
        }
        .nav-link {
            position: relative;
            padding: 0.5rem 0.75rem;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .mobile-menu {
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.active {
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="fixed w-full z-50 transition-all duration-300 bg-blue-900" id="main-header">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="index.php" class="text-2xl font-bold text-white"><?php echo $siteName; ?></a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="quem-somos.php" class="nav-link text-white">Quem Somos</a>
                    <a href="servicos.php" class="nav-link text-white">Serviços</a>
                    <a href="parceiros.php" class="nav-link text-white">Parceiros</a>
                    <a href="contato.php" class="nav-link text-white">Contato</a>
                    <a href="simulador.php" class="bg-white text-blue-900 px-4 py-2 rounded-full font-bold hover:bg-blue-50 transition duration-300">Simulador</a>
                    <a href="area-parceiros.php" class="bg-white text-blue-900 px-4 py-2 rounded-full font-bold hover:bg-blue-50 transition duration-300">Área Parceiros</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden mobile-menu absolute top-full left-0 w-full bg-blue-900 py-4 px-6" id="mobile-menu">
                <div class="flex flex-col space-y-4">
                    <a href="index.php" class="text-white hover:text-blue-200">Home</a>
                    <a href="quem-somos.php" class="text-white hover:text-blue-200">Quem Somos</a>
                    <a href="servicos.php" class="text-white hover:text-blue-200">Serviços</a>
                    <a href="parceiros.php" class="text-white hover:text-blue-200">Parceiros</a>
                    <a href="contato.php" class="text-white hover:text-blue-200">Contato</a>
                    <a href="simulador.php" class="bg-white text-blue-900 px-6 py-2 rounded-full font-bold text-center hover:bg-blue-50 transition duration-300">Simulador</a>
                    <a href="area-parceiros.php" class="bg-white text-blue-900 px-6 py-2 rounded-full font-bold text-center hover:bg-blue-50 transition duration-300">Área Parceiros</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Spacer to prevent content from being hidden under fixed header -->
    <div class="h-16"></div>

    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Header scroll effect
        const header = document.getElementById('main-header');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll <= 0) {
                header.classList.remove('header-scrolled');
                header.style.padding = '0.75rem 0';
            } else {
                header.classList.add('header-scrolled');
                header.style.padding = '0.5rem 0';
            }
            
            lastScroll = currentScroll;
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        let isMenuOpen = false;

        mobileMenuButton.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            mobileMenu.classList.toggle('active');
            mobileMenuButton.innerHTML = isMenuOpen ? 
                '<i class="fas fa-times text-2xl"></i>' : 
                '<i class="fas fa-bars text-2xl"></i>';
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (isMenuOpen && !mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                isMenuOpen = false;
                mobileMenu.classList.remove('active');
                mobileMenuButton.innerHTML = '<i class="fas fa-bars text-2xl"></i>';
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: {
                            y: target,
                            offsetY: 80
                        },
                        ease: "power3.inOut"
                    });
                }
            });
        });
    </script>
</body>
</html> 