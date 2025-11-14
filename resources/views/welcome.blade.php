@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-600 dark:bg-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Mega Jaya AC</h1>
            <p class="text-xl mb-8">Solusi pendingin ruangan Anda. Profesional, Cepat, dan Terpercaya.</p>
            <a href="{{ route('services') }}" class="bg-white text-blue-600 font-bold py-3 px-6 rounded-lg text-lg hover:bg-gray-100 transition">Lihat Layanan Kami</a>
        </div>
    </div>

    <!-- Konten Halaman -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <!-- Bagian Jasa Service -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-12">
            <div class="p-6 md:p-10">
                <h2 class="text-3xl font-bold mb-6 text-center">Layanan Jasa Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($services as $service)
                        <div class="border dark:border-gray-700 rounded-lg p-6 shadow-md hover:shadow-lg transition">
                            <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ Str::limit($service->description, 100) }}</p>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </div>
                            
                            {{-- INI PERBAIKANNYA --}}
                            <a href="{{ route('booking.create', $service) }}" class="w-full text-center inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                                Booking Sekarang
                            </a>
                        </div>
                    @empty
                        <p class="col-span-full text-center">Layanan belum tersedia.</p>
                    @endforelse
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('services') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Lihat Semua Layanan &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Bagian Produk AC -->
        {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-12">
            <div class="p-6 md:p-10">
                <h2 class="text-3xl font-bold mb-6 text-center">Produk Unit AC Terbaru</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <div class="border dark:border-gray-700 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                            <img src="{{ Storage::url($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2 truncate" title="{{ $product->name }}">{{ $product->name }}</h3>
                                <div class="text-xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </div> --}}
                                {{-- Kita akan perbaiki link ini di langkah berikutnya (Keranjang Belanja) --}}
                                {{-- <a href="#" class="w-full text-center inline-block bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center">Produk belum tersedia.</p>
                    @endforelse
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('products') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Lihat Semua Produk &rarr;</a>
                </div>
            </div>
        </div> --}}

    </div>
@endsection