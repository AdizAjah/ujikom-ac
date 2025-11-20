@extends('layouts.public')

@section('title', 'Home')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Jaya AC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        whatsapp: {
                            green: '#25D366',
                            light: '#dcf8c6',
                            dark: '#075e54'
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(34, 197, 94, 0.1), 0 10px 10px -5px rgba(34, 197, 94, 0.04);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
        }
        
        .service-icon {
            background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .whatsapp-gradient {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 50%, #075E54 100%);
        }
        
        .green-glow {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* === CSS KHUSUS CAROUSEL === */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Tombol Navigasi Fade Effect */
        .nav-btn {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        .group:hover .nav-btn {
            opacity: 1;
        }
        /* Mobile Adjustment */
        @media (max-width: 768px) {
            .nav-btn {
                opacity: 0.8;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
    <section class="gradient-bg text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white rounded-full"></div>
            <div class="absolute bottom-20 left-1/4 w-24 h-24 bg-white rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <i class="fas fa-bolt text-yellow-300"></i>
                    <span class="text-sm font-medium">Layanan AC Profesional & Terpercaya</span>
                </div>
                
                <img src="/images/logo.jpg" alt="Mega Jaya AC Logo" class="mx-auto mb-6 w-32 h-32 object-contain shadow-2xl rounded-full">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Solusi
                    <span class="text-white/90">Pendingin Ruangan</span>
                    Terbaik
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Teknisi ahli, garansi resmi, dan pelayanan cepat untuk kenyamanan optimal ruangan Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('services') }}" class="bg-white text-primary-600 font-semibold py-4 px-8 rounded-xl text-lg hover:bg-gray-50 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl green-glow pulse-animation">
                        <i class="fas fa-tools mr-2"></i>
                        Lihat Layanan Kami
                    </a>
                    <a href="#services" class="bg-transparent border-2 border-white text-white font-semibold py-4 px-8 rounded-xl text-lg hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-chevron-down mr-2 group-hover:translate-y-1 transition-transform"></i> 
                        Jelajahi Layanan
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <section id="services" class="mb-20 fade-in">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                    <i class="fas fa-star text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Layanan Unggulan</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Layanan Jasa Kami</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Berbagai layanan perawatan dan perbaikan AC dengan kualitas terbaik dan harga terjangkau.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md card-hover border border-gray-100 dark:border-gray-700 group">
                        
                        {{-- === BAGIAN GAMBAR / CAROUSEL (START) === --}}
                        {{-- Class -mx-6 -mt-6 agar gambar full width mentok ke tepi card --}}
                        <div class="relative h-56 bg-gray-100 dark:bg-gray-700 group/image -mx-6 -mt-6 mb-6 rounded-t-2xl overflow-hidden">
                            @if($service->images->count() > 0)
                                {{-- 1. CONTAINER GAMBAR (ID Unik: carousel-home-ID) --}}
                                <div id="carousel-home-{{ $service->id }}" class="flex overflow-x-auto snap-x snap-mandatory h-full scrollbar-hide w-full scroll-smooth">
                                    @foreach($service->images as $index => $image)
                                        <div class="w-full flex-shrink-0 snap-center h-full relative">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                                 alt="{{ $service->name }}" 
                                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                        </div>
                                    @endforeach
                                </div>

                                {{-- 2. TOMBOL NAVIGASI (Jika gambar > 1) --}}
                                @if($service->images->count() > 1)
                                    <button onclick="document.getElementById('carousel-home-{{ $service->id }}').scrollBy({left: -300, behavior: 'smooth'})" 
                                            class="nav-btn absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 dark:bg-black/50 hover:bg-white dark:hover:bg-black text-gray-800 dark:text-white p-2 rounded-full shadow-lg z-10 w-8 h-8 flex items-center justify-center transition-all transform hover:scale-110 focus:outline-none">
                                        <i class="fas fa-chevron-left text-xs"></i>
                                    </button>

                                    <button onclick="document.getElementById('carousel-home-{{ $service->id }}').scrollBy({left: 300, behavior: 'smooth'})" 
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
                                <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-700 dark:to-gray-800 group-hover:bg-primary-100 transition-colors">
                                    <i class="fas fa-tools text-4xl text-primary-200 dark:text-gray-600 mb-2"></i>
                                    <span class="text-xs text-gray-400">No Image Available</span>
                                </div>
                            @endif

                            {{-- Badge Tersedia (Overlay) --}}
                            <div class="absolute top-3 right-3 z-20">
                                <span class="bg-green-500/90 backdrop-blur-md text-white text-xs font-bold py-1 px-3 rounded-full shadow-sm flex items-center gap-1">
                                    <i class="fas fa-check-circle"></i> Tersedia
                                </span>
                            </div>
                        </div>
                        {{-- === BAGIAN GAMBAR (END) === --}}
                        
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
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300 transition-colors group">
                    Lihat Semua Layanan
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </section>

        <section class="mb-20 fade-in">
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

        <section class="mb-20 fade-in">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">500+</div>
                    <div class="text-gray-600 dark:text-gray-400">Klien Puas</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">1000+</div>
                    <div class="text-gray-600 dark:text-gray-400">AC Diperbaiki</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">24/7</div>
                    <div class="text-gray-600 dark:text-gray-400">Layanan Darurat</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">10+</div>
                    <div class="text-gray-600 dark:text-gray-400">Tahun Pengalaman</div>
                </div>
            </div>
        </section>

        <section class="fade-in">
            <div class="whatsapp-gradient rounded-2xl p-8 md:p-12 text-white text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-5 right-10 w-16 h-16 bg-white rounded-full"></div>
                    <div class="absolute bottom-5 left-10 w-20 h-20 bg-white rounded-full"></div>
                </div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Meningkatkan Kenyamanan Ruangan Anda?</h2>
                    <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                        Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6281234567890" class="bg-white text-gray-800 font-semibold py-3 px-6 rounded-xl hover:bg-gray-100 transition-all duration-300 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                            <i class="fab fa-whatsapp text-green-500 text-xl"></i>
                            Chat WhatsApp
                        </a>
                        <a href="tel:+6281234567890" class="bg-transparent border-2 border-white text-white font-semibold py-3 px-6 rounded-xl hover:bg-white/10 transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-phone"></i>
                            Telepon Sekarang
                        </a>
                    </div>
                    
                    <div class="mt-8 flex flex-wrap justify-center gap-6 text-white/80 text-sm">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock"></i>
                            <span>Respon Cepat 24 Jam</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-tag"></i>
                            <span>Gratis Konsultasi</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jangkauan Seluruh Kota</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Fade in animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            };
            
            // Check on load
            fadeInOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', fadeInOnScroll);
        });
    </script>
</body>
</html>
@endsection