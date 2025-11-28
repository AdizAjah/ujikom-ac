<x-app-layout>
    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Dashboard Admin</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Selamat datang kembali! Berikut ringkasan aktivitas terkini.</p>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- New Bookings Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md rounded-xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-whatsapp-100 dark:bg-whatsapp-900 rounded-lg p-3">
                                <svg class="h-6 w-6 text-whatsapp-600 dark:text-whatsapp-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Booking Baru</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $newBookings }}</div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-whatsapp-600 dark:text-whatsapp-400">
                                            <svg class="self-center flex-shrink-0 h-5 w-5 text-whatsapp-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Increased by</span>
                                            12%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3">
                        <div class="text-sm">
                            <a href="{{ route('admin.bookings.index') }}" class="font-medium text-whatsapp-600 dark:text-whatsapp-400 hover:text-whatsapp-500 dark:hover:text-whatsapp-300 transition-colors duration-200">Lihat semua booking</a>
                        </div>
                    </div>
                </div>

                <!-- New Messages Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md rounded-xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-yellow-100 dark:bg-yellow-900 rounded-lg p-3">
                                <svg class="h-6 w-6 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Pesan Baru</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $newMessages }}</div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-yellow-600 dark:text-yellow-400">
                                            <svg class="self-center flex-shrink-0 h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Increased by</span>
                                            8%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3">
                        <div class="text-sm">
                            <a href="{{ route('admin.contacts.index') }}" class="font-medium text-whatsapp-600 dark:text-whatsapp-400 hover:text-whatsapp-500 dark:hover:text-whatsapp-300 transition-colors duration-200">Lihat semua pesan</a>
                        </div>
                    </div>
                </div>

                <!-- Total Users Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md rounded-xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 dark:bg-indigo-900 rounded-lg p-3">
                                <svg class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Pengguna</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $totalUsers }}</div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-indigo-600 dark:text-indigo-400">
                                            <svg class="self-center flex-shrink-0 h-5 w-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Increased by</span>
                                            20%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-whatsapp-600 dark:text-whatsapp-400 hover:text-whatsapp-500 dark:hover:text-whatsapp-300 transition-colors duration-200">Lihat semua pengguna</a>
                        </div>
                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md rounded-xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-100 dark:bg-green-900 rounded-lg p-3">
                                <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Pendapatan Bulan Ini</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-white">Rp 15.7jt</div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600 dark:text-green-400">
                                            <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Increased by</span>
                                            14%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-whatsapp-600 dark:text-whatsapp-400 hover:text-whatsapp-500 dark:hover:text-whatsapp-300 transition-colors duration-200">Lihat laporan keuangan</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Booking Chart -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Tren Booking</h3>
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">Minggu</button>
                            <button class="px-3 py-1 text-xs font-medium text-white bg-whatsapp-600 rounded-md hover:bg-whatsapp-700 transition-colors duration-200">Bulan</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">Tahun</button>
                        </div>
                    </div>
                    <div class="h-64 flex items-center justify-center bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <p class="text-gray-500 dark:text-gray-400">Grafik booking akan ditampilkan di sini</p>
                    </div>
                </div>

                <!-- Revenue Chart -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Pendapatan</h3>
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-1 text-xs font-medium text-white bg-whatsapp-600 rounded-md hover:bg-whatsapp-700 transition-colors duration-200">Minggu</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">Bulan</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">Tahun</button>
                        </div>
                    </div>
                    <div class="h-64 flex items-center justify-center bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <p class="text-gray-500 dark:text-gray-400">Grafik pendapatan akan ditampilkan di sini</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Aktivitas Terkini</h3>
                </div>
                <div class="overflow-hidden">
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-whatsapp-100 dark:bg-whatsapp-900 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-whatsapp-600 dark:text-whatsapp-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">Booking baru dari Budi Santoso</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">2 jam yang lalu</p>
                                </div>
                                <div>
                                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-whatsapp-100 dark:bg-whatsapp-900 text-whatsapp-800 dark:text-whatsapp-200">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">Pesan baru dari Siti Nurhaliza</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">5 jam yang lalu</p>
                                </div>
                                <div>
                                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200">
                                        Baca
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-indigo-600 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">3 pengguna baru mendaftar hari ini</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Hari ini</p>
                                </div>
                                <div>
                                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-whatsapp-600 dark:text-whatsapp-400 hover:text-whatsapp-500 dark:hover:text-whatsapp-300 transition-colors duration-200">Lihat semua aktivitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>