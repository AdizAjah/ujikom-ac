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
            .nav-gradient {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-bottom: 2px solid rgba(34, 197, 94, 0.3);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .dark .nav-gradient {
                background: linear-gradient(135deg, rgba(17,24,39,0.98) 0%, rgba(17,24,39,0.95) 100%);
                border-bottom: 1px solid rgba(34, 197, 94, 0.2);
            }
            
            .nav-link {
                @apply relative inline-flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-300 ease-out rounded-xl;
            }
            
            .nav-link:not(.active) {
                @apply text-black dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 hover:bg-green-50 dark:hover:bg-green-900/20;
            }
            
            .nav-link.active {
                @apply text-green-600 dark:text-green-400 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/30 dark:to-green-800/30 shadow-sm;
            }
            
            .nav-link.active::before {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 50%;
                transform: translateX(-50%);
                width: 24px;
                height: 3px;
                background: linear-gradient(90deg, #16a34a, #22c55e);
                border-radius: 2px;
            }
            
            .user-avatar {
                width: 36px;
                height: 36px;
                background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: 600;
                font-size: 14px;
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
            }
            
            .dropdown-content {
                opacity: 0;
                transform: translateY(-10px);
                transition: all 0.3s ease;
                pointer-events: none;
            }
            
            .dropdown-content.show {
                opacity: 1;
                transform: translateY(0);
                pointer-events: all;
            }
            
            .mobile-menu {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.5s ease;
            }
            
            .mobile-menu.open {
                max-height: 500px;
            }
            
            .logo-container {
                transition: transform 0.3s ease;
            }
            
            .logo-container:hover {
                transform: scale(1.05);
            }
            
            .green-glow {
                box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
            }
            
            .whatsapp-gradient {
                background: linear-gradient(135deg, #25D366 0%, #128C7E 50%, #075E54 100%);
            }
            
            .admin-badge {
                background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
                box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-green-50 via-white to-green-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-900 dark:text-gray-100 flex flex-col min-h-screen">
        
        <!-- Modern Green Navigation -->
        <nav class="nav-gradient shadow-sm fixed w-full z-50 m-0 p-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo dengan efek modern hijau -->
                    <div class="flex-shrink-0 flex items-center logo-container">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                            <div class="relative">
                                <img src="{{ asset('images/logo.jpg') }}" alt="Mega Jaya AC Logo" class="h-12 w-auto rounded-xl shadow-md group-hover:shadow-lg transition-all duration-300 green-glow">
                                <div class="absolute inset-0 rounded-xl bg-green-500 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                            </div>

                        </a>
                    </div>

                    <!-- Menu Utama - Desktop -->
                    <div class="hidden lg:flex lg:items-center lg:space-x-2 m-0">
                        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                            <i class="fas fa-info-circle mr-2 text-sm"></i>
                            About Us
                        </a>
                        <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                            <i class="fas fa-calendar-check mr-2 text-sm"></i>
                            Booking Service
                        </a>
                        <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">
                            <i class="fas fa-images mr-2 text-sm"></i>
                            Gallery
                        </a>
                        <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">
                            <i class="fas fa-box mr-2 text-sm"></i>
                            AC Unit
                        </a>
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <i class="fas fa-envelope mr-2 text-sm"></i>
                            Contact Us
                        </a>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="nav-link bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900/30 dark:to-red-800/30 text-red-600 dark:text-red-400 shadow-sm admin-badge">
                                    <i class="fas fa-shield-alt mr-2 text-sm"></i>
                                    Admin Panel
                                </a>
                            @else
                                <a href="{{ route('my-bookings') }}" class="nav-link {{ request()->routeIs('my-bookings') ? 'active' : '' }}">
                                    <i class="fas fa-clipboard-list mr-2 text-sm"></i>
                                    My Bookings
                                </a>
                            @endif
                        @endauth
                    </div>

                    <!-- User Menu & Auth - Desktop -->
                    <div class="hidden lg:flex lg:items-center lg:space-x-3">
                        @auth
                            <!-- Modern User Dropdown -->
                            <div class="relative" x-data="{ open: false }">
                                <button 
                                    @click="open = !open"
                                    class="flex items-center space-x-3 px-4 py-2.5 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 green-glow hover:green-glow"
                                >
                                    <div class="user-avatar">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ Auth::user()->name }}</span>
                                    <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                                </button>
                                
                                <!-- Dropdown Menu -->
                                <div 
                                    x-show="open" 
                                    @click.away="open = false"
                                    class="absolute right-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden dropdown-content green-glow"
                                    :class="{ 'show': open }"
                                    x-cloak
                                >
                                    <div class="p-2">
                                        <div class="px-3 py-2 border-b border-gray-100 dark:border-gray-700 mb-2">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                                        </div>
                                        
                                        <a href="{{ route('profile.edit') }}" class="flex items-center px-3 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-colors duration-200 group">
                                            <i class="fas fa-user-circle mr-3 text-green-500 group-hover:scale-110 transition-transform"></i>
                                            {{ __('Profile') }}
                                        </a>
                                        
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full flex items-center px-3 py-3 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors duration-200 group">
                                                <i class="fas fa-sign-out-alt mr-3 group-hover:scale-110 transition-transform"></i>
                                                {{ __('Log Out') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('login') }}" class="px-4 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-xl">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-sm font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-300 green-glow">
                                        Get Started
                                    </a>
                                @endif
                            </div>
                        @endauth
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden flex items-center space-x-3">
                        @auth
                            <div class="user-avatar text-sm">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="px-3 py-1.5 text-sm text-green-600 dark:text-green-400 border border-green-200 dark:border-green-800 rounded-lg hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors">
                                Login
                            </a>
                        @endauth
                        <button id="mobile-menu-button" class="p-2.5 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 hover:bg-green-100 dark:hover:bg-green-900/30 transition-colors duration-300 green-glow">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="mobile-menu lg:hidden border-t border-green-100 dark:border-green-900/30 mt-2">
                    <div class="py-4 space-y-2">
                        <a href="{{ route('about') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('about') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            <i class="fas fa-info-circle mr-3 w-5 text-center text-green-500"></i>
                            About Us
                        </a>
                        <a href="{{ route('services') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('services') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            <i class="fas fa-calendar-check mr-3 w-5 text-center text-green-500"></i>
                            Booking Service
                        </a>
                        <a href="{{ route('gallery') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('gallery') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            <i class="fas fa-images mr-3 w-5 text-center text-green-500"></i>
                            Gallery
                        </a>
                        <a href="{{ route('contact') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('contact') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            <i class="fas fa-envelope mr-3 w-5 text-center text-green-500"></i>
                            Contact Us
                        </a>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900/30 dark:to-red-800/30 text-red-600 dark:text-red-400 admin-badge">
                                    <i class="fas fa-shield-alt mr-3 w-5 text-center"></i>
                                    Admin Panel
                                </a>
                            @else
                                <a href="{{ route('my-bookings') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('my-bookings') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                                    <i class="fas fa-clipboard-list mr-3 w-5 text-center text-green-500"></i>
                                    My Bookings
                                </a>
                            @endif
                            
                            <!-- Mobile User Actions -->
                            <div class="border-t border-green-100 dark:border-green-900/30 mt-4 pt-4">
                                <div class="px-4 py-2 mb-2">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                                </div>
                                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-base font-medium text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-xl transition-colors duration-300">
                                    <i class="fas fa-user-circle mr-3 w-5 text-center text-green-500"></i>
                                    Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center px-4 py-3 text-base font-medium text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-colors duration-300">
                                        <i class="fas fa-sign-out-alt mr-3 w-5 text-center"></i>
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="border-t border-green-100 dark:border-green-900/30 mt-4 pt-4 flex space-x-3 px-4">
                                <a href="{{ route('register') }}" class="flex-1 text-center px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white text-sm font-medium rounded-xl shadow-sm green-glow">
                                    Get Started
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-12 flex-grow mt-16">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-green-100 dark:border-green-900/30 mt-auto">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center text-gray-500 dark:text-gray-400 text-sm">
                &copy; {{ date('Y') }} Mega Jaya AC. All rights reserved.
            </div>
        </footer>

        <script>
            // Mobile Menu Toggle
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                
                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.toggle('open');
                        const icon = mobileMenuButton.querySelector('i');
                        if (mobileMenu.classList.contains('open')) {
                            icon.classList.remove('fa-bars');
                            icon.classList.add('fa-times');
                            mobileMenuButton.classList.add('bg-green-100', 'dark:bg-green-900/30');
                        } else {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                            mobileMenuButton.classList.remove('bg-green-100', 'dark:bg-green-900/30');
                        }
                    });
                }
                
                // Close mobile menu when clicking on a link
                const mobileLinks = document.querySelectorAll('#mobile-menu a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.remove('open');
                        const icon = mobileMenuButton.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                        mobileMenuButton.classList.remove('bg-green-100', 'dark:bg-green-900/30');
                    });
                });

                // Add scroll effect to navbar
                window.addEventListener('scroll', function() {
                    const nav = document.querySelector('nav');
                    if (window.scrollY > 10) {
                        nav.classList.add('shadow-lg');
                    } else {
                        nav.classList.remove('shadow-lg');
                    }
                });
            });
        </script>
    </body>
</html>