@extends('layouts.public')

@section('title', 'Jasa Service')

@section('content')
    {{-- CSS Tambahan: Hide Scrollbar & Smooth Scroll --}}
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Agar tombol navigasi muncul halus */
        .nav-btn {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        .group:hover .nav-btn {
            opacity: 1;
        }
        /* Di HP (layar sentuh), tombol selalu terlihat agak transparan agar user sadar bisa digeser */
        @media (max-width: 768px) {
            .nav-btn {
                opacity: 0.8;
            }
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <section class="gradient-bg text-white relative overflow-hidden mb-16 rounded-3xl shadow-xl">
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
        </section>

        <div class="mb-20">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                    <i class="fas fa-star text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Layanan Unggulan</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Pilih Layanan Yang Anda Butuhkan</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Teknisi kami siap membantu mengatasi masalah AC Anda dengan cepat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md card-hover border border-gray-100 dark:border-gray-700 group overflow-hidden flex flex-col">
                        
                        {{-- BAGIAN GAMBAR (CAROUSEL + NAVIGASI) --}}
                        <div class="relative h-56 bg-gray-100 dark:bg-gray-700 group/image">
                            @if($service->images->count() > 0)
                                {{-- 1. CONTAINER GAMBAR (Diberi ID Unik) --}}
                                <div id="carousel-{{ $service->id }}" class="flex overflow-x-auto snap-x snap-mandatory h-full scrollbar-hide w-full scroll-smooth">
                                    @foreach($service->images as $index => $image)
                                        <div class="w-full flex-shrink-0 snap-center h-full relative">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                                 alt="{{ $service->name }}" 
                                                 class="w-full h-full object-cover">
                                        </div>
                                    @endforeach
                                </div>

                                {{-- 2. TOMBOL NAVIGASI (Hanya muncul jika gambar > 1) --}}
                                @if($service->images->count() > 1)
                                    {{-- Tombol Kiri --}}
                                    <button onclick="document.getElementById('carousel-{{ $service->id }}').scrollBy({left: -300, behavior: 'smooth'})" 
                                            class="nav-btn absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 dark:bg-black/50 hover:bg-white dark:hover:bg-black text-gray-800 dark:text-white p-2 rounded-full shadow-lg z-10 w-8 h-8 flex items-center justify-center transition-all transform hover:scale-110 focus:outline-none">
                                        <i class="fas fa-chevron-left text-xs"></i>
                                    </button>

                                    {{-- Tombol Kanan --}}
                                    <button onclick="document.getElementById('carousel-{{ $service->id }}').scrollBy({left: 300, behavior: 'smooth'})" 
                                            class="nav-btn absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 dark:bg-black/50 hover:bg-white dark:hover:bg-black text-gray-800 dark:text-white p-2 rounded-full shadow-lg z-10 w-8 h-8 flex items-center justify-center transition-all transform hover:scale-110 focus:outline-none">
                                        <i class="fas fa-chevron-right text-xs"></i>
                                    </button>

                                    {{-- Badge Counter --}}
                                    <div class="absolute bottom-3 right-3 bg-black/60 backdrop-blur-sm text-white text-xs px-2 py-1 rounded-md flex items-center gap-1 pointer-events-none">
                                        <i class="fas fa-images"></i> {{ $service->images->count() }}
                                    </div>
                                @endif
                            @else
                                {{-- Fallback Jika Tidak Ada Gambar --}}
                                <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-700 dark:to-gray-800">
                                    <i class="fas fa-tools text-4xl text-primary-200 dark:text-gray-600 mb-2"></i>
                                    <span class="text-xs text-gray-400">No Image Available</span>
                                </div>
                            @endif

                            {{-- Badge Tersedia --}}
                            <div class="absolute top-3 right-3 z-20">
                                <span class="bg-green-500/90 backdrop-blur-md text-white text-xs font-bold py-1 px-3 rounded-full shadow-sm flex items-center gap-1">
                                    <i class="fas fa-check-circle"></i> Tersedia
                                </span>
                            </div>
                        </div>

                        {{-- BAGIAN KONTEN CARD --}}
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white line-clamp-1" title="{{ $service->name }}">
                                    {{ $service->name }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                    {{ $service->description ?? 'Layanan profesional untuk perawatan AC Anda agar kembali dingin dan nyaman.' }}
                                </p>
                            </div>

                            <div class="mt-auto">
                                <div class="flex justify-between items-center mb-6 pb-4 border-b border-gray-100 dark:border-gray-700">
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Mulai dari</p>
                                        <div class="text-xl font-bold text-primary-600 dark:text-primary-400">
                                            Rp {{ number_format($service->price, 0, ',', '.') }}
                                        </div>
                                    </div>
                                    <div class="flex items-center text-amber-500 bg-amber-50 dark:bg-amber-900/20 px-2 py-1 rounded-lg">
                                        <i class="fas fa-star text-sm"></i>
                                        <span class="ml-1 font-bold text-sm">4.9</span>
                                    </div>
                                </div>

                                <a href="{{ route('booking.create', $service) }}" class="w-full inline-flex items-center justify-center bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg gap-2 group/btn">
                                    <i class="far fa-calendar-check group-hover/btn:scale-110 transition-transform"></i>
                                    Booking Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 bg-gray-50 dark:bg-gray-800 rounded-3xl border border-dashed border-gray-300 dark:border-gray-700">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center shadow-sm">
                            <i class="fas fa-search text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Belum Ada Layanan</h3>
                        <p class="text-gray-500 dark:text-gray-400">Kami sedang menyiapkan layanan terbaik untuk Anda.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300 transition-colors group">
                    Butuh Layanan Custom? Hubungi Kami
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="mt-10">
                {{ $services->links() }}
            </div>

        </div>

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
    </div>
@endsection