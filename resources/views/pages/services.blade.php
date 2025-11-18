@extends('layouts.public')

@section('title', 'Jasa Service')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 md:p-10">

            <!-- Judul -->
            <h1 class="text-3xl font-bold mb-10 text-center text-gray-800 dark:text-gray-100">
                Layanan Jasa Kami
            </h1>

            <!-- Grid Layanan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="border dark:border-gray-700 rounded-xl p-6 shadow-lg bg-white dark:bg-gray-900 flex flex-col justify-between transition hover:shadow-xl">

                        <div>
                            <h3 class="text-2xl font-semibold mb-3 text-gray-800 dark:text-gray-100">
                                {{ $service->name }}
                            </h3>

                            <p class="text-gray-600 dark:text-gray-400 mb-5 leading-relaxed">
                                {{ $service->description }}
                            </p>
                        </div>

                        <div>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-6">
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </div>

                            <a href="{{ route('booking.create', $service) }}"
                                class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition">
                                Booking Sekarang
                            </a>
                        </div>

                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500 dark:text-gray-300">
                        Layanan belum tersedia.
                    </p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $services->links() }}
            </div>

        </div>
    </div>
</div>
@endsection
