{{-- Ini menggunakan layout PUBLIK karena formnya diakses dari halaman publik --}}
@extends('layouts.public')

@section('title', 'Booking Service')

@section('content')
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 md:p-10 text-gray-900 dark:text-gray-100">
                <h1 class="text-3xl font-bold mb-6 text-center">Form Booking Service</h1>

                <!-- Detail Service -->
                <div class="mb-6 border dark:border-gray-700 rounded-lg p-4">
                    <h3 class="text-xl font-semibold">{{ $service->name }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $service->description }}</p>
                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400 mt-2">
                        Rp {{ number_format($service->price, 0, ',', '.') }}
                    </p>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-4">
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <!-- Waktu Booking -->
                    <div>
                        <label for="booking_date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tanggal & Jam Booking</label>
                        <input id="booking_date" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                               type="datetime-local" name="booking_date" value="{{ old('booking_date') }}" required />
                        <p class="text-sm text-gray-500 mt-1">Pilih tanggal dan jam kedatangan teknisi.</p>
                    </div>

                    <!-- No. Telepon -->
                    <div class="mt-4">
                        <label for="user_phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nomor Telepon (WhatsApp)</label>
                        {{-- Ambil data default dari profil user jika ada --}}
                        <input id="user_phone" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                               type="text" name="user_phone" value="{{ old('user_phone', Auth::user()->phone) }}" required />
                    </div>

                    <!-- Alamat -->
                    <div class="mt-4">
                        <label for="user_address" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Alamat Lengkap Pemasangan/Service</label>
                        {{-- Ambil data default dari profil user jika ada --}}
                        <textarea id="user_address" name="user_address" rows="4" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>{{ old('user_address', Auth::user()->address) }}</textarea>
                    </div>

                    <!-- Catatan -->
                    <div class="mt-4">
                        <label for="notes" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Catatan (Opsional)</label>
                        <textarea id="notes" name="notes" rows="3" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('notes') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Contoh: AC tidak dingin, AC bocor, dll.</p>
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <button type="submit" class="w-full text-center inline-block bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition">
                            Konfirmasi Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection