@extends('layouts.public')

@section('title', 'Jasa Service')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 md:p-10">
                <h1 class="text-3xl font-bold mb-8 text-center">Layanan Jasa Kami</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($services as $service)
                        <div class="border dark:border-gray-700 rounded-lg p-6 shadow-md flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-semibold mb-2">{{ $service->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $service->description }}</p>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                                    Rp {{ number_format($service->price, 0, ',', '.') }}
                                </div>
                                
                                {{-- INI PERBAIKANNYA --}}
                                <a href="{{ route('booking.create', $service) }}" class="w-full text-center inline-block bg-blue-600 text-white font-bold py-3 px-5 rounded-lg hover:bg-blue-700 transition">
                                    Booking Sekarang
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center">Layanan belum tersedia.</p>
                    @endforelse
                </div>
                <div class="mt-8">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection