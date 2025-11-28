<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Mega Jaya AC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-white">

    <!-- Navbar (sama seperti halaman About) -->
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
    <section class="relative bg-gradient-to-b from-green-500 to-green-600 overflow-hidden h-screen flex items-center justify-center">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-20 w-64 h-64 bg-green-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-32 right-32 w-80 h-80 bg-green-300 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Hubungi Kami</h1>
            <p class="text-xl md:text-3xl font-light max-w-3xl mx-auto">
                Ada pertanyaan? Jangan ragu untuk mengirimkan pesan kepada kami.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">

                <!-- Form Kirim Pesan -->
                <div class="bg-gray-800 rounded-3xl p-10 shadow-2xl">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="text-green-500 font-medium">Kirim Pesan</span>
                    </div>

                    <h2 class="text-4xl font-bold mb-4">Mari Berdiskusi</h2>
                    <p class="text-gray-400 mb-10">Tim kami siap membantu Anda dengan pertanyaan tentang layanan AC.</p>

                    <form action="#" method="POST">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <input type="text" placeholder="Nama Lengkap" class="w-full px-5 py-4 bg-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600">
                            <input type="email" placeholder="Email" class="w-full px-5 py-4 bg-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <input type="text" placeholder="Subjek" class="w-full px-5 py-4 mb-6 bg-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600">
                        <textarea rows="6" placeholder="Pesan" class="w-full px-5 py-4 mb-8 bg-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600 resize-none"></textarea>
                        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-5 rounded-xl flex items-center justify-center space-x-3 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            <span>Kirim Pesan</span>
                        </button>
                    </form>
                </div>

                <!-- Informasi Kontak & Jam Kerja -->
                <div class="space-y-8">

                    <!-- Cara Menghubungi Kami -->
                    <div class="bg-gray-800 rounded-3xl p-10 shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span class="text-green-500 font-medium">Informasi Kontak</span>
                        </div>
                        <h3 class="text-3xl font-bold mb-4">Cara Menghubungi Kami</h3>
                        <p class="text-gray-400 mb-8">Berbagai cara untuk menghubungi tim profesional kami.</p>

                        <!-- WhatsApp -->
                        <div class="bg-green-600 bg-opacity-20 border border-green-600 rounded-2xl p-6 mb-6 text-center">
                            <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C6.453 0 1.762 4.688.988 10.277a11.717 11.717 0 001.508 5.862L0 24l8.063-2.085a11.758 11.758 0 005.627 1.423c5.597 0 10.188-4.69 10.19-10.288.002-2.725-1.06-5.29-2.988-7.215"/></svg>
                            </div>
                            <p class="font-medium">WhatsApp</p>
                            <p class="text-sm text-gray-400">Chat langsung dengan teknisi kami</p>
                            <p class="text-2xl font-bold mt-2">+62 812-1901-4136</p>
                        </div>

                        <!-- Telepon -->
                        <div class="flex items-center space-x-5 mb-6 bg-gray-700 bg-opacity-50 rounded-2xl p-5">
                            <div class="w-12 h-12 bg-gray-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <p class="font-medium">Telepon</p>
                                <p class="text-sm text-gray-400">Panggilan langsung untuk kebutuhan mendesak</p>
                                <p class="text-xl font-bold">+62 812-3456-7890</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-5 bg-gray-700 bg-opacity-50 rounded-2xl p-5">
                            <div class="w-12 h-12 bg-gray-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="font-medium">Email</p>
                                <p class="text-sm text-gray-400">Kirim email untuk informasi detail</p>
                                <p class="text-xl font-bold">info@megajaya-ac.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Kerja -->
                    <div class="bg-gray-800 rounded-3xl p-10 shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-green-500 font-medium">Jam Kerja</span>
                        </div>
                        <h3 class="text-3xl font-bold mb-8">Kami Siap Membantu</h3>

                        <div class="space-y-5">
                            <div class="flex justify-between">
                                <span class="text-gray-300">Senin – Jumat</span>
                                <span class="font-bold text-green-500">08:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-300">Sabtu</span>
                                <span class="font-bold text-green-500">08:00 - 15:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-300">Minggu</span>
                                <span class="font-bold text-red-500">Tutup</span>
                            </div>
                        </div>

                        <div class="mt-8 p-5 bg-yellow-500 bg-opacity-10 border border-yellow-600 rounded-2xl flex items-start space-x-4">
                            <div class="w-8 h-8 bg-yellow-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.742-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="font-medium text-yellow-400">Layanan Darurat 24/7</p>
                                <p class="text-sm text-gray-400">Tersedia untuk kebutuhan mendesak</p>
                            </div>
                        </div>
                    </div>
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