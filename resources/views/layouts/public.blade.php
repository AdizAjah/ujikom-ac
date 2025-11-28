<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Mega Jaya AC') - Jasa Service AC Terpercaya</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Flatpickr CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <!-- Flatpickr JS -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <style>
            .whatsapp-gradient {
                background: linear-gradient(135deg, #25D366 0%, #128C7E 50%, #075E54 100%);
            }
            
            .green-glow {
                box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
            }
            
            .logo-container {
                transition: transform 0.3s ease;
            }
            
            .logo-container:hover {
                transform: scale(1.05);
            }
            
            .form-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(34, 197, 94, 0.1);
            }
            
            .dark .form-card {
                background: rgba(31, 41, 55, 0.95);
                border: 1px solid rgba(34, 197, 94, 0.2);
            }
            
            .input-group {
                position: relative;
            }
            
            .input-group:focus-within .input-icon {
                color: #22c55e;
            }
            
            .btn-whatsapp {
                background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
                transition: all 0.3s ease;
            }
            
            .btn-whatsapp:hover {
                background: linear-gradient(135deg, #128C7E 0%, #075E54 100%);
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);
            }
            
            .floating-shapes {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: -1;
            }
            
            .shape {
                position: absolute;
                opacity: 0.1;
            }
            
            .shape-1 {
                width: 300px;
                height: 300px;
                background: linear-gradient(135deg, #25D366, #128C7E);
                border-radius: 50%;
                top: -150px;
                right: -150px;
                animation: float 20s infinite ease-in-out;
            }
            
            .shape-2 {
                width: 200px;
                height: 200px;
                background: linear-gradient(135deg, #128C7E, #075E54);
                border-radius: 50%;
                bottom: -100px;
                left: -100px;
                animation: float 15s infinite ease-in-out reverse;
            }
            
            .shape-3 {
                width: 150px;
                height: 150px;
                background: linear-gradient(135deg, #25D366, #075E54);
                border-radius: 50%;
                top: 50%;
                left: -75px;
                animation: float 25s infinite ease-in-out;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(-20px) rotate(180deg);
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-green-50 via-white to-green-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex items-center justify-center">
        
        <!-- Floating Background Shapes -->
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="w-full max-w-md mx-auto p-4 sm:p-6 lg:p-8">
            <!-- Logo Section -->
            <div class="text-center mb-8">
                <a href="/" class="inline-flex justify-center logo-container">
                    <div class="relative">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Mega Jaya AC Logo" class="h-20 w-auto rounded-2xl shadow-lg green-glow">
                        <div class="absolute inset-0 rounded-2xl bg-green-500 opacity-0 hover:opacity-10 transition-opacity duration-300"></div>
                    </div>
                </a>
                <h1 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Mega Jaya AC</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Jasa Service AC Terpercaya</p>
            </div>

            <!-- Form Card -->
            <div class="form-card rounded-2xl shadow-2xl p-8 mb-6">
                @yield('content')

            </div>

            <!-- Footer Links -->
            <div class="text-center space-y-4">
                <div class="flex justify-center space-x-6">
                    <a href="{{ route('about') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-200">
                        <i class="fas fa-info-circle mr-1"></i>
                        Tentang Kami
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-200">
                        <i class="fas fa-envelope mr-1"></i>
                        Kontak
                    </a>
                </div>
                
                <div class="flex justify-center space-x-4">
                    <a href="#" class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-colors duration-200 green-glow">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-pink-500 text-white rounded-full flex items-center justify-center hover:bg-pink-600 transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                
                <p class="text-xs text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} Mega Jaya AC. All rights reserved.
                </p>
            </div>
        </div>

        <script>
            // Add ripple effect to buttons
            document.addEventListener('DOMContentLoaded', function() {
                const buttons = document.querySelectorAll('button');
                buttons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        const ripple = document.createElement('span');
                        ripple.classList.add('absolute', 'bg-white', 'opacity-30', 'rounded-full', 'animate-ping');
                        ripple.style.width = ripple.style.height = '20px';
                        ripple.style.left = e.offsetX - 10 + 'px';
                        ripple.style.top = e.offsetY - 10 + 'px';
                        
                        this.style.position = 'relative';
                        this.style.overflow = 'hidden';
                        this.appendChild(ripple);
                        
                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });
                });
                
                // Add input focus animations
                const inputs = document.querySelectorAll('input[type="email"], input[type="password"], input[type="text"]');
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('transform', 'scale-[1.02]');
                    });
                    
                    input.addEventListener('blur', function() {
                        this.parentElement.classList.remove('transform', 'scale-[1.02]');
                    });
                });
            });
        </script>
    </body>
</html>