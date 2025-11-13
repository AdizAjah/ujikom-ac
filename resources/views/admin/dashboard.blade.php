<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome, Admin!") }}

                    <!-- Statistik -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- New Bookings -->
                        <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-200">New Bookings</h3>
                            <p class="text-3xl font-bold mt-2">{{ $newBookings }}</p>
                            <a href="{{ route('admin.bookings.index') }}" class="text-sm text-blue-600 dark:text-blue-300 hover:underline mt-4 inline-block">View Bookings</a>
                        </div>

                        <!-- New Orders -->
                        <div class="bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-green-800 dark:text-green-200">New Product Orders</h3>
                            <p class="text-3xl font-bold mt-2">{{ $newOrders }}</p>
                            <a href="{{ route('admin.orders.index') }}" class="text-sm text-green-600 dark:text-green-300 hover:underline mt-4 inline-block">View Orders</a>
                        </div>

                        <!-- New Messages -->
                        <div class="bg-yellow-100 dark:bg-yellow-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-200">New Messages</h3>
                            <p class="text-3xl font-bold mt-2">{{ $newMessages }}</p>
                            <a href="{{ route('admin.contacts.index') }}" class="text-sm text-yellow-600 dark:text-yellow-300 hover:underline mt-4 inline-block">View Messages</a>
                        </div>

                        <!-- Total Users -->
                        <div class="bg-indigo-100 dark:bg-indigo-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-indigo-800 dark:text-indigo-200">Total Users</h3>
                            <p class="text-3xl font-bold mt-2">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>