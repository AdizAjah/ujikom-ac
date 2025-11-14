<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-t">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Mega Jaya AC') - Jasa Service AC Terpercaya</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 flex flex-col min-h-screen">
        
        <!-- Navigasi Publik -->
        <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600 dark:text-blue-400">
                            Mega Jaya AC
                        </a>
                    </div>

                    <!-- Menu Utama -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-8">
                        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                        <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Booking Service</a>
                        {{-- <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Unit AC</a> --}}
                        <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-red-600 dark:text-red-400 underline">
                                    Admin Panel
                                </a>
                            @else
                                <a href="{{ route('my-bookings') }}" class="nav-link {{ request()->routeIs('my-bookings') ? 'active' : '' }}">My Bookings</a>
                            @endif
                        @endauth
                    </div>

                    <!-- Tombol Login/Register/User Menu -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-4">
                        @auth

                            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 underline">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-sm font-medium text-gray-700 dark:text-gray-300 underline">Register</a>
                            @endif
                        @endauth
                    </div>

                    
                    
                    <!-- Hamburger (Mobile) -->
                    <div class="-me-2 flex items-center sm:hidden">
                        {{-- TODO: Tambahkan logika hamburger menu jika diperlukan --}}
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Style untuk Nav Link (bisa dipindah ke CSS) -->
        <style>
            .nav-link {
                @apply inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out;
            }
            .nav-link.active {
                @apply border-blue-500 dark:border-blue-600 text-gray-900 dark:text-gray-100;
            }
        </style>

        <!-- Page Content -->
        <main class="py-12 flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700 mt-auto">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center text-gray-500 dark:text-gray-400 text-sm">
                &copy; {{ date('Y') }} Mega Jaya AC. All rights reserved.
            </div>
        </footer>
    </body>
</html>