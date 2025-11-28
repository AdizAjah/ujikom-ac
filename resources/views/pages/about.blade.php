<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Mega Jaya AC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-white">

    <!-- Header / Navbar (sesuai gambar) -->
    <header class="bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Left: Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Mega Jaya AC" class="h-10 rounded-xl shadow-md group-hover:shadow-lg transition-all duration-300">
                </a>
            </div>
            <!-- Center: Nav -->
            <nav class="hidden md:flex space-x-8 text-gray-700 font-medium">
                <a href="{{ route('about') }}" class="hover:text-green-600">About Us</a>
                <a href="{{ route('services') }}" class="hover:text-green-600">Booking Service</a>
                <a href="{{ route('gallery') }}" class="hover:text-green-600">Gallery</a>
                <a href="{{ route('products') }}" class="hover:text-green-600">AC Unit</a>
                <a href="{{ route('contact') }}" class="hover:text-green-600">Contact Us</a>
            </nav>
            <!-- Right: Buttons -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="text-gray-700 hidden md:block">Log in</a>
                <a href="{{ route('register') }}" class="bg-green-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-700 transition">
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-b from-green-500 to-green-600 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-20 w-64 h-64 bg-green-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-32 w-96 h-96 bg-green-300 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Tentang Kami</h1>
            <p class="text-xl md:text-3xl font-light max-w-4xl mx-auto">
                Mega Jaya AC – Solusi Terpercaya untuk Kebutuhan Pendingin Ruangan Anda
            </p>
        </div>
    </section>

    <!-- Komitmen Kami -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <!-- Title -->
            <div class="text-center mb-12">
                <span class="inline-block px-6 py-2 bg-green-600 text-sm rounded-full mb-4">
                    Tentang Mega Jaya AC
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4">Komitmen Kami</h2>
                <p class="mt-6 text-gray-300 max-w-3xl mx-auto text-lg">
                    Kami adalah penyedia layanan dan produk AC terkemuka dengan pengalaman bertahun-tahun di industri ini.
                </p>
            </div>

            <!-- 4 Komitmen -->
            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto mt-16">
                <div class="flex items-start space-x-6">
                    <div class="w-14 h-14 bg-green-600 rounded-full flex-shrink-0 flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Layanan Berkualitas</h3>
                        <p class="text-gray-400">Tim teknisi berpengalaman kami berkomitmen memberikan solusi terbaik untuk sistem AC Anda.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="w-14 h-14 bg-green-600 rounded-full flex-shrink-0 flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Pelayanan Cepat</h3>
                        <p class="text-gray-400">Respon cepat dan pelayanan yang efisien untuk kebutuhan mendesak Anda.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="w-14 h-14 bg-green-600 rounded-full flex-shrink-0 flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Garansi Terpercaya</h3>
                        <p class="text-gray-400">Semua layanan kami dilengkapi dengan garansi resmi untuk kepuasan Anda.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="w-14 h-14 bg-green-600 rounded-full flex-shrink-0 flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Kepuasan Pelanggan</h3>
                        <p class="text-gray-400">Kami bangga dengan komitmen kami untuk kepuasan pelanggan dan selalu berusaha melampaui ekspektasi Anda.</p>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20 max-w-4xl mx-auto">
                <div class="bg-gray-800 rounded-2xl p-8 text-center border border-gray-700">
                    <h3 class="text-5xl font-bold text-green-500">500+</h3>
                    <p class="text-gray-400 mt-3">Klien Puas</p>
                </div>
                <div class="bg-gray-800 rounded-2xl p-8 text-center border border-gray-700">
                    <h3 class="text-5xl font-bold text-green-500">1000+</h3>
                    <p class="text-gray-400 mt-3">AC Diperbaiki</p>
                </div>
                <div class="bg-gray-800 rounded-2xl p-8 text-center border border-gray-700">
                    <h3 class="text-5xl font-bold text-green-500">24/7</h3>
                    <p class="text-gray-400 mt-3">Layanan Darurat</p>
                </div>
                <div class="bg-gray-800 rounded-2xl p-8 text-center border border-gray-700">
                    <h3 class="text-5xl font-bold text-green-500">10+</h3>
                    <p class="text-gray-400 mt-3">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-950 py-10 border-t border-gray-800">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-400">&copy; 2025 Mega Jaya AC. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>