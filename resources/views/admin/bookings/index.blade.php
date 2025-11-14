<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Session Message -->
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">User</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Service</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Booking Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Phone</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($bookings as $booking)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $booking->user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $booking->service->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $booking->booking_date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $booking->user_phone }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            @if($booking->status == 'pending') bg-yellow-100 text-yellow-800 @endif
                                            @if($booking->status == 'confirmed') bg-blue-100 text-blue-800 @endif
                                            @if($booking->status == 'completed') bg-green-100 text-green-800 @endif
                                            @if($booking->status == 'cancelled') bg-red-100 text-red-800 @endif
                                        ">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">
                                        <!-- Form Sederhana untuk Update Status -->
                                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="text-sm dark:bg-gray-900 border-gray-300 dark:border-gray-700 rounded-md" onchange="this.form.submit()">
                                                <option value="pending" @if($booking->status == 'pending') selected @endif>Pending</option>
                                                <option value="confirmed" @if($booking->status == 'confirmed') selected @endif>Confirmed</option>
                                                <option value="processing" @if($booking->status == 'processing') selected @endif>Processing</option>
                                                <option value="completed" @if($booking->status == 'completed') selected @endif>Completed</option>
                                                <option value="cancelled" @if($booking->status == 'cancelled') selected @endif>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-center">No bookings found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $bookings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>