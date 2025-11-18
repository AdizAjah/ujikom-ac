@extends('layouts.public')

@section('title', 'Kontak Kami')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <section class="gradient-bg text-white relative overflow-hidden mb-16">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 left-10 w-20 h-20 bg-white rounded-full"></div>
                <div class="absolute top-40 right-20 w-16 h-16 bg-white rounded-full"></div>
                <div class="absolute bottom-20 left-1/4 w-24 h-24 bg-white rounded-full"></div>
            </div>

            <div class="max-w-4xl mx-auto px-4 py-24 md:py-32 text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Hubungi Kami
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Ada pertanyaan? Jangan ragu untuk mengirimkan pesan kepada kami.
                </p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
        </section>

        <!-- Contact Form & Info -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-lg border border-gray-100 dark:border-gray-700">
                <div class="mb-8">
                    <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                        <i class="fas fa-envelope text-primary-500"></i>
                        <span class="text-primary-700 dark:text-primary-300 font-medium">Kirim Pesan</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Mari Berdiskusi</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg">
                        Tim kami siap membantu Anda dengan pertanyaan tentang layanan AC.
                    </p>
                </div>

                <!-- Session Message -->
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-xl">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-green-700 dark:text-green-300 font-medium">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl">
                        <div class="flex items-center gap-3 mb-2">
                            <i class="fas fa-exclamation-triangle text-red-500"></i>
                            <span class="text-red-700 dark:text-red-300 font-medium">Ada kesalahan dalam form:</span>
                        </div>
                        <ul class="list-disc list-inside text-sm text-red-600 dark:text-red-400 ml-6">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap</label>
                            <input id="name" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-xl shadow-sm px-4 py-3" type="text" name="name" value="{{ old('name') }}" required autofocus />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input id="email" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-xl shadow-sm px-4 py-3" type="email" name="email" value="{{ old('email') }}" required />
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="mb-6">
                        <label for="subject" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">Subjek</label>
                        <input id="subject" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-xl shadow-sm px-4 py-3" type="text" name="subject" value="{{ old('subject') }}" required />
                    </div>

                    <!-- Message -->
                    <div class="mb-8">
                        <label for="message" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-xl shadow-sm px-4 py-3" required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary-500 text-white font-semibold py-4 px-6 rounded-xl hover:bg-primary-600 transition-all duration-300 flex items-center justify-center gap-2 group shadow-md hover:shadow-lg">
                        <i class="fas fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Contact Methods -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-lg border border-gray-100 dark:border-gray-700">
                    <div class="mb-8">
                        <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                            <i class="fas fa-phone text-primary-500"></i>
                            <span class="text-primary-700 dark:text-primary-300 font-medium">Informasi Kontak</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Cara Menghubungi Kami</h2>
                        <p class="text-gray-600 dark:text-gray-400 text-lg">
                            Berbagai cara untuk menghubungi tim profesional kami.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- WhatsApp -->
                        <div class="flex items-start gap-4 p-4 bg-whatsapp-light dark:bg-whatsapp-dark rounded-xl">
                            <div class="w-12 h-12 rounded-xl bg-whatsapp-green flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">WhatsApp</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">Chat langsung dengan teknisi kami</p>
                                <a href="https://wa.me/6281234567890" class="text-whatsapp-green font-medium hover:underline">
                                    +62 812-3456-7890
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 p-4 bg-primary-50 dark:bg-primary-900/20 rounded-xl">
                            <div class="w-12 h-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-primary-600 dark:text-primary-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Telepon</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">Panggilan langsung untuk kebutuhan mendesak</p>
                                <a href="tel:+6281234567890" class="text-primary-600 dark:text-primary-400 font-medium hover:underline">
                                    +62 812-3456-7890
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-gray-600 dark:text-gray-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">Kirim email untuk informasi detail</p>
                                <a href="mailto:info@megajaya-ac.com" class="text-primary-600 dark:text-primary-400 font-medium hover:underline">
                                    info@megajaya-ac.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gradient-to-r from-primary-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl p-8 md:p-12 border border-primary-100 dark:border-gray-700">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center gap-3 bg-white dark:bg-gray-800 rounded-full px-6 py-3 mb-6 shadow-sm">
                            <i class="fas fa-clock text-primary-500"></i>
                            <span class="text-primary-700 dark:text-primary-300 font-medium">Jam Kerja</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Kami Siap Membantu</h3>
                    </div>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-primary-200 dark:border-primary-800">
                            <span class="font-medium text-gray-700 dark:text-gray-300">Senin - Jumat</span>
                            <span class="text-primary-600 dark:text-primary-400 font-semibold">08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-primary-200 dark:border-primary-800">
                            <span class="font-medium text-gray-700 dark:text-gray-300">Sabtu</span>
                            <span class="text-primary-600 dark:text-primary-400 font-semibold">08:00 - 15:00</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="font-medium text-gray-700 dark:text-gray-300">Minggu</span>
                            <span class="text-red-500 font-semibold">Tutup</span>
                        </div>
                    </div>

                    <div class="mt-8 p-4 bg-primary-100 dark:bg-primary-900/20 rounded-xl">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-exclamation-triangle text-amber-500"></i>
                            <div>
                                <p class="text-sm font-medium text-primary-800 dark:text-primary-200">Layanan Darurat 24/7</p>
                                <p class="text-xs text-primary-600 dark:text-primary-400">Tersedia untuk kebutuhan mendesak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
