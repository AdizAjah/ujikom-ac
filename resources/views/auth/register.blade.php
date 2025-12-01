<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Mega Jaya AC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center px-4">

    <!-- Background dekorasi hijau -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-96 h-96 bg-green-600 rounded-full blur-3xl opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-500 rounded-full blur-3xl opacity-20 translate-x-1/3 translate-y-1/3"></div>
    </div>

    <div class="relative z-10 w-full max-w-md">
        <!-- Logo + Judul -->
        <div class="text-center mb-10">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <img src="{{ asset('images/logo.jpg') }}" alt="Mega Jaya AC" class="h-10 rounded-xl shadow-md group-hover:shadow-lg transition-all duration-300">
            </a>
            <h1 class="text-4xl font-bold text-white">Buat Akun Baru</h1>
            <p class="text-gray-400 mt-3">Daftar sekarang dan nikmati layanan AC terbaik</p>
        </div>

        <!-- Card Register -->
        <div class="bg-gray-800 rounded-3xl shadow-2xl p-8 border border-gray-700">
            <form action="#" method="POST" class="space-y-6">

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap</label>
                    <input type="text" required 
                           class="w-full px-5 py-4 bg-gray-700 border border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600 text-white placeholder-gray-400"
                           placeholder="Masukkan nama lengkap Anda">
                </div>

                <!-- Nomor Telepon / WhatsApp -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nomor Telepon (WhatsApp)</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-4 bg-gray-700 border border-r-0 border-gray-600 rounded-l-xl text-gray-400">+62</span>
                        <input type="tel" required 
                               class="flex-1 px-5 py-4 bg-gray-700 border border-gray-600 rounded-r-xl focus:outline-none focus:ring-2 focus:ring-green-600 text-white placeholder-gray-400"
                               placeholder="812-3456-7890">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" required 
                           class="w-full px-5 py-4 bg-gray-700 border border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600 text-white placeholder-gray-400"
                           placeholder="contoh@email.com">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Kata Sandi</label>
                    <input type="password" required 
                           class="w-full px-5 py-4 bg-gray-700 border border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600 text-white placeholder-gray-400"
                           placeholder="Minimal 8 karakter">
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Konfirmasi Kata Sandi</label>
                    <input type="password" required 
                           class="w-full px-5 py-4 bg-gray-700 border border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600 text-white placeholder-gray-400"
                           placeholder="Ketik ulang kata sandi">
                </div>

                <!-- Checkbox Syarat -->
                <label class="flex items-start text-sm text-gray-400">
                    <input type="checkbox" required class="mt-1 mr-3 w-4 h-4 text-green-600 bg-gray-700 border-gray-600 rounded focus:ring-green-500">
                    <span>Saya setuju dengan <a href="#" class="text-green-500 hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="text-green-500 hover:underline">Kebijakan Privasi</a> Mega Jaya AC</span>
                </label>

                <!-- Tombol Daftar -->
                <button type="submit" 
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-5 rounded-xl transition duration-200 flex items-center justify-center space-x-3 text-lg mt-8">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    <span>Daftar Sekarang</span>
                </button>
            </form>
            <!-- Sudah punya akun? -->
            <p class="text-center text-gray-400 mt-8">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-green-500 font-semibold hover:text-green-400">Masuk di sini</a>
            </p>
        </div>

        <!-- Kembali ke Home -->
        <div class="text-center mt-8">
            <a href="/" class="text-gray-400 hover:text-white text-sm flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Kembali ke Beranda</span>
            </a>
        </div>
    </div>

</body>
</html>