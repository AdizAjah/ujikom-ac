@extends('layouts.public')

@section('title', 'About Us')

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
                    Tentang Kami
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Mega Jaya AC - Solusi Terpercaya untuk Kebutuhan Pendingin Ruangan Anda
                </p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
        </section>

        <!-- Content -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-lg border border-gray-100 dark:border-gray-700">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                        <i class="fas fa-info-circle text-primary-500"></i>
                        <span class="text-primary-700 dark:text-primary-300 font-medium">Tentang Mega Jaya AC</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Komitmen Kami</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                        Kami adalah penyedia layanan dan produk AC terkemuka dengan pengalaman bertahun-tahun di industri ini.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tools text-xl service-icon"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Layanan Berkualitas</h3>
                                <p class="text-gray-600 dark:text-gray-400">Tim teknisi berpengalaman kami berkomitmen memberikan solusi terbaik untuk sistem AC Anda.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-xl service-icon"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Garansi Terpercaya</h3>
                                <p class="text-gray-600 dark:text-gray-400">Semua layanan kami dilengkapi dengan garansi resmi untuk kepuasan Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-xl service-icon"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Pelayanan Cepat</h3>
                                <p class="text-gray-600 dark:text-gray-400">Respon cepat dan pelayanan yang efisien untuk kebutuhan mendesak Anda.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-heart text-xl service-icon"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Kepuasan Pelanggan</h3>
                                <p class="text-gray-600 dark:text-gray-400">Kami bangga dengan komitmen kami untuk kepuasan pelanggan dan selalu berusaha melampaui ekspektasi Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-primary-50 dark:bg-primary-900/20 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">500+</div>
                        <div class="text-gray-600 dark:text-gray-400">Klien Puas</div>
                    </div>
                    <div class="bg-primary-50 dark:bg-primary-900/20 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">1000+</div>
                        <div class="text-gray-600 dark:text-gray-400">AC Diperbaiki</div>
                    </div>
                    <div class="bg-primary-50 dark:bg-primary-900/20 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">24/7</div>
                        <div class="text-gray-600 dark:text-gray-400">Layanan Darurat</div>
                    </div>
                    <div class="bg-primary-50 dark:bg-primary-900/20 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">10+</div>
                        <div class="text-gray-600 dark:text-gray-400">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
