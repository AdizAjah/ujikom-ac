<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Booking Details') }} #{{ $booking->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Booking Details -->
                    <div>
                        <h3 class="text-lg font-medium mb-4">Booking Details</h3>
                        <p><strong>Service:</strong> {{ $booking->service->name }}</p>
                        <p><strong>Booking Date:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y, H:i') }}</p>
                        <p><strong>Status:</strong> {{ $booking->status }}</p>
                        <p><strong>Notes:</strong> {{ $booking->notes ?? '-' }}</p>
                    </div>

                    <!-- User Details -->
                    <div>
                        <h3 class="text-lg font-medium mb-4">Customer Details</h3>
                        <p><strong>Name:</strong> {{ $booking->user->name }}</p>
                        <p><strong>Email:</strong> {{ $booking->user->email }}</p>
                        <p><strong>Phone:</strong> {{ $booking->user_phone }}</p>
                        <p><strong>Address:</strong> {{ $booking->user_address }}</p>
                    </div>

                    <!-- Update Status Form -->
                    <div class="md:col-span-2 border-t dark:border-gray-700 pt-6">
                        <h3 class="text-lg font-medium mb-4">Update Status</h3>
                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex items-center gap-4">
                                <select name="status" class="block w-full md:w-1/3 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="pending" @if($booking->status == 'pending') selected @endif>Pending</option>
                                    <option value="confirmed" @if($booking->status == 'confirmed') selected @endif>Confirmed</option>
                                    <option value="processing" @if($booking->status == 'processing') selected @endif>Processing</option>
                                    <option value="completed" @if($booking->status == 'completed') selected @endif>Completed</option>
                                    <option value="cancelled" @if($booking->status == 'cancelled') selected @endif>Cancelled</option>
                                </select>
                                <x-primary-button>
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.bookings.index') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-200">
                    &larr; Back to all bookings
                </a>
            </div>
        </div>
    </div>
</x-app-layout>