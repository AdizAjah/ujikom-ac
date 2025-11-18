@extends('layouts.public')

@section('title', 'Jasa Service')

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
                    Layanan Jasa Kami
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Berbagai layanan perawatan dan perbaikan AC dengan kualitas terbaik dan harga terjangkau.
                </p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
        </section>

        <!-- Services Grid -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                    <i class="fas fa-star text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Layanan Unggulan</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Pilih Layanan Yang Anda Butuhkan</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Berbagai layanan perawatan dan perbaikan AC dengan kualitas terbaik dan harga terjangkau.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md card-hover border border-gray-100 dark:border-gray-700 group">
                        <!-- Header dengan gradient -->
                        <div class="relative -mx-6 -mt-6 mb-6 rounded-t-2xl overflow-hidden">
                            <div class="h-2 bg-gradient-to-r from-primary-400 to-primary-600"></div>
                        </div>

                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-50 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-tools text-xl service-icon"></i>
                            </div>
                            <span class="bg-primary-100 dark:bg-primary-900/40 text-primary-700 dark:text-primary-300 text-sm font-medium py-1 px-3 rounded-full">
                                <i class="fas fa-check-circle mr-1"></i>
                                Tersedia
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ $service->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">{{ Str::limit($service->description, 100) }}</p>

                        <div class="flex justify-between items-center mb-6">
                            <div class="text-2xl font-bold text-primary-600 dark:text-primary-400">
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </div>
                            <div class="flex items-center text-amber-500 bg-amber-50 dark:bg-amber-900/20 px-2 py-1 rounded-lg">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 font-medium">4.9</span>
                            </div>
                        </div>

                        <a href="{{ route('booking.create', $service) }}" class="w-full text-center inline-block bg-primary-500 text-white font-semibold py-3 px-4 rounded-xl hover:bg-primary-600 transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md hover:shadow-lg">
                            <i class="far fa-calendar-check group-hover/btn:scale-110 transition-transform"></i>
                            Booking Sekarang
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                            <i class="fas fa-concierge-bell text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Layanan Belum Tersedia</h3>
                        <p class="text-gray-500 dark:text-gray-400">Kami sedang mempersiapkan layanan terbaik untuk Anda.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300 transition-colors group">
                    Butuh Layanan Lain? Hubungi Kami
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Keunggulan -->
        <section class="mb-20">
            <div class="bg-gradient-to-r from-primary-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl p-8 md:p-12 border border-primary-100 dark:border-gray-700">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-3 bg-white dark:bg-gray-800 rounded-full px-6 py-3 mb-6 shadow-sm">
                        <i class="fas fa-award text-primary-500"></i>
                        <span class="text-primary-700 dark:text-primary-300 font-medium">Keunggulan Kami</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Mengapa Memilih Kami?</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                        Komitmen kami memberikan layanan terbaik dengan standar kualitas tinggi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-check text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Teknisi Profesional</h3>
                        <p class="text-gray-600 dark:text-gray-400">Tim teknisi bersertifikat dan berpengalaman lebih dari 10 tahun.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Garansi Layanan</h3>
                        <p class="text-gray-600 dark:text-gray-400">Semua layanan dilengkapi dengan garansi resmi untuk kepuasan Anda.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-bolt text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Cepat & Responsif</h3>
                        <p class="text-gray-600 dark:text-gray-400">Pelayanan cepat dengan respon kurang dari 1 jam untuk kebutuhan mendesak.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        @if($services->hasPages())
            <div class="text-center">
                {{ $services->links() }}
            </div>
        @endif
    </div>
@endsection
