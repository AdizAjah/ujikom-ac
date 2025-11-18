@extends('layouts.public')

@section('title', 'Galeri')

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
                    Galeri Kami
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Lihat hasil kerja profesional tim teknisi Mega Jaya AC.
                </p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
        </section>

        <!-- Gallery Grid -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                    <i class="fas fa-images text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Portofolio Kami</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Hasil Pekerjaan Terbaik</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Dokumentasi hasil perbaikan dan pemasangan AC oleh tim profesional kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($galleryItems as $item)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                        <!-- Image -->
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ Storage::url($item->image_url) }}" alt="{{ $item->caption }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            <!-- Overlay Content -->
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                @if($item->caption)
                                    <p class="text-sm font-medium mb-2">{{ $item->caption }}</p>
                                @endif
                                <div class="flex items-center gap-2 text-xs">
                                    <i class="fas fa-eye"></i>
                                    <span>View Details</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center">
                                        <i class="fas fa-camera text-primary-600 dark:text-primary-400 text-xs"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Gallery Item</span>
                                </div>
                                <div class="flex items-center gap-1 text-amber-500">
                                    <i class="fas fa-star text-xs"></i>
                                    <span class="text-xs font-medium">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                            <i class="fas fa-images text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Galeri Belum Tersedia</h3>
                        <p class="text-gray-500 dark:text-gray-400">Kami sedang mempersiapkan galeri foto terbaik untuk Anda.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Call to Action -->
        <section class="bg-gradient-to-r from-primary-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl p-8 md:p-12 border border-primary-100 dark:border-gray-700">
            <div class="text-center">
                <div class="inline-flex items-center gap-3 bg-white dark:bg-gray-800 rounded-full px-6 py-3 mb-6 shadow-sm">
                    <i class="fas fa-tools text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Butuh Layanan?</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Siap Melayani Kebutuhan AC Anda</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg mb-8">
                    Lihat hasil kerja kami di atas? Sekarang saatnya Anda merasakan pelayanan profesional kami.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-primary-500 text-white font-semibold py-4 px-8 rounded-xl hover:bg-primary-600 transition-all duration-300 shadow-md hover:shadow-lg">
                        <i class="fas fa-list"></i>
                        Lihat Layanan
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white dark:bg-gray-800 text-primary-600 dark:text-primary-400 font-semibold py-4 px-8 rounded-xl border border-primary-200 dark:border-primary-800 hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-all duration-300">
                        <i class="fas fa-phone"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
