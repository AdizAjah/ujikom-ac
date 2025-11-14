@extends('layouts.public')

@section('title', 'Galeri')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 md:p-10">
                <h1 class="text-3xl font-bold mb-8 text-center">Galeri Mega Jaya AC</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse ($galleryItems as $item)
                        <div>
                            <img src="{{ Storage::url($item->image_url) }}" alt="{{ $item->caption }}" class="w-full h-64 object-cover rounded-lg shadow-md">
                            @if($item->caption)
                                <p class="text-center mt-2 text-gray-600 dark:text-gray-400">{{ $item->caption }}</p>
                            @endif
                        </div>
                    @empty
                        <p class="col-span-full text-center">Belum ada foto di galeri.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection