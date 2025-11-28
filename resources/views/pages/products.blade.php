@extends('layouts.app')

@section('title', 'Produk Unit AC')

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
                    Produk Unit AC
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
                    Berbagai pilihan unit AC berkualitas dengan harga terbaik untuk kebutuhan Anda.
                </p>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
        </section>

        <!-- Products Grid -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-primary-50 dark:bg-primary-900/20 rounded-full px-6 py-3 mb-6">
                    <i class="fas fa-shopping-cart text-primary-500"></i>
                    <span class="text-primary-700 dark:text-primary-300 font-medium">Katalog Produk</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Pilih Unit AC Terbaik</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Berbagai merek dan tipe AC dengan garansi resmi dan harga kompetitif.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @forelse ($products as $product)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-100 dark:border-gray-700 group">
                        <!-- Image -->
                        <div class="relative aspect-square overflow-hidden bg-gray-50 dark:bg-gray-900 cursor-pointer" onclick="openImageModal('{{ Storage::url($product->image_url) }}', '{{ $product->name }}')">
                            <img src="{{ Storage::url($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 right-4">
                                <span class="bg-primary-500 text-white text-xs font-semibold py-1 px-3 rounded-full shadow-md">
                                    <i class="fas fa-star mr-1"></i>4.9
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="bg-white/90 dark:bg-gray-800/90 rounded-full p-3 transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                    <i class="fas fa-search-plus text-primary-600 dark:text-primary-400 text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex-grow">
                                <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">{{ Str::limit($product->description, 80) }}</p>
                            </div>

                            <div class="mt-auto">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-2xl font-bold text-primary-600 dark:text-primary-400">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    <div class="flex items-center gap-1 text-amber-500">
                                        <i class="fas fa-shield-alt text-xs"></i>
                                        <span class="text-xs font-medium">Garansi</span>
                                    </div>
                                </div>

                                <a href="#" class="w-full text-center inline-block bg-primary-500 text-white font-semibold py-3 px-4 rounded-xl hover:bg-primary-600 transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md hover:shadow-lg">
                                    <i class="fas fa-eye group-hover/btn:scale-110 transition-transform"></i>
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                            <i class="fas fa-box-open text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Produk Belum Tersedia</h3>
                        <p class="text-gray-500 dark:text-gray-400">Kami sedang menyiapkan katalog produk terbaik untuk Anda.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300 transition-colors group">
                    Butuh Konsultasi? Hubungi Kami
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Why Choose Our Products -->
        <section class="mb-20">
            <div class="bg-gradient-to-r from-primary-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl p-8 md:p-12 border border-primary-100 dark:border-gray-700">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-3 bg-white dark:bg-gray-800 rounded-full px-6 py-3 mb-6 shadow-sm">
                        <i class="fas fa-award text-primary-500"></i>
                        <span class="text-primary-700 dark:text-primary-300 font-medium">Keunggulan Produk</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Mengapa Memilih Produk Kami?</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                        Kami menyediakan produk AC berkualitas dengan berbagai keunggulan yang akan Anda dapatkan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-certificate text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Garansi Resmi</h3>
                        <p class="text-gray-600 dark:text-gray-400">Semua produk dilengkapi dengan garansi resmi dari pabrikan.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-truck text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Pengiriman Cepat</h3>
                        <p class="text-gray-600 dark:text-gray-400">Layanan pengiriman cepat dan aman ke seluruh wilayah Indonesia.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-headset text-2xl service-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">After Sales Service</h3>
                        <p class="text-gray-600 dark:text-gray-400">Dukungan purna jual yang maksimal untuk kepuasan pelanggan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        @if($products->hasPages())
            <div class="text-center">
                {{ $products->links() }}
            </div>
        @endif
    </div>

    <!-- Fullscreen Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4" onclick="closeImageModal()">
        <div class="relative max-w-7xl max-h-full w-full h-full flex items-center justify-center">
            
            <!-- Image Container -->
            <div class="relative max-w-full max-h-full flex items-center justify-center" onclick="event.stopPropagation()">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
                
                <!-- Image Title -->
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                    <h3 id="modalImageTitle" class="text-white text-xl font-semibold text-center"></h3>
                </div>
            </div>

            <!-- Navigation Hint -->
            <!-- <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 text-sm">
                <i class="fas fa-mouse-pointer mr-2"></i>Klik di luar gambar untuk menutup
            </div> -->
        </div>
    </div>

    <script>
        function openImageModal(imageUrl, imageName) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalImageTitle = document.getElementById('modalImageTitle');
            
            modalImage.src = imageUrl;
            modalImage.alt = imageName;
            modalImageTitle.textContent = imageName;
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Close modal with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeImageModal();
            }
        });
    </script>
@endsection
