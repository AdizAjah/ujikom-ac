@extends('layouts.public')

@section('title', 'Produk Unit AC')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 md:p-10">
            <h1 class="text-3xl font-bold mb-8 text-center">Produk Unit AC</h1>

            <div class="space-y-8">
                @forelse ($products as $product)
                    <div class="flex flex-col md:flex-row items-start gap-6 border dark:border-gray-700 rounded-lg shadow-md p-5">
                        <img src="{{ Storage::url($product->image_url) }}" alt="{{ $product->name }}" class="w-full md:w-1/3 object-cover rounded-lg">

                        <div class="flex flex-col justify-between flex-grow">
                            <div>
                                <h3 class="text-2xl font-semibold mb-2">{{ $product->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $product->description }}</p>
                            </div>

                            <div>
                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </div>
                                <a href="#" class="inline-block bg-green-600 text-white font-bold py-2 px-5 rounded-lg hover:bg-green-700 transition">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Produk belum tersedia.</p>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
