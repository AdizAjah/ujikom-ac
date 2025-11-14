@extends('layouts.public')

@section('title', 'Produk Unit AC')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 md:p-10">
                <h1 class="text-3xl font-bold mb-8 text-center">Produk Unit AC</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <div class="border dark:border-gray-700 rounded-lg overflow-hidden shadow-md flex flex-col">
                            <img src="{{ Storage::url($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-56 object-cover">
                            <div class="p-4 flex flex-col flex-grow justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">{{ Str::limit($product->description, 80) }}</p>
                                </div>
                                <div>
                                    <div class="text-xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    <a href="#" class="w-full text-center inline-block bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center">Produk belum tersedia.</p>
                    @endforelse
                </div>
                <div class="mt-8">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection