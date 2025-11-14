<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Order Details') }} #{{ $order->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Order Summary -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h3 class="text-lg font-medium mb-2">Customer Details</h3>
                            <p><strong>Name:</strong> {{ $order->user->name }}</p>
                            <p><strong>Email:</strong> {{ $order->user->email }}</p>
                            <p><strong>Phone:</strong> {{ $order->user->phone }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium mb-2">Shipping Address</h3>
                            <p>{{ $order->shipping_address }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium mb-2">Order Summary</h3>
                            <p><strong>Payment Status:</strong> {{ $order->payment_status }}</p>
                            <p><strong>Order Status:</strong> {{ $order->status }}</p>
                            <p><strong>Total Amount:</strong> Rp {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="mt-8 border-t dark:border-gray-700 pt-6">
                        <h3 class="text-lg font-medium mb-4">Items Ordered</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Product</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Quantity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($order->items as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $item->product->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $item->quantity }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Update Status Form -->
                    <div class="md:col-span-2 border-t dark:border-gray-700 pt-6 mt-6">
                        <h3 class="text-lg font-medium mb-4">Update Order</h3>
                        <form action="{{ route('admin.orders.update', $order) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <x-input-label for="status" :value="__('Order Status')" />
                                    <select name="status" id="status" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="pending" @if($order->status == 'pending') selected @endif>Pending</option>
                                        <option value="paid" @if($order->status == 'paid') selected @endif>Paid (Waiting Shipment)</option>
                                        <option value="shipping" @if($order->status == 'shipping') selected @endif>Shipping</option>
                                        <option value="completed" @if($order->status == 'completed') selected @endif>Completed</option>
                                        <option value="cancelled" @if($order->status == 'cancelled') selected @endif>Cancelled</option>
                                    </select>
                                </div>
                                <div>
                                    <x-input-label for="shipping_tracking_number" :value="__('Tracking Number')" />
                                    <x-text-input id="shipping_tracking_number" class="block mt-1 w-full" type="text" name="shipping_tracking_number" :value="old('shipping_tracking_number', $order->shipping_tracking_number)" />
                                </div>
                                <div class="flex items-end">
                                    <x-primary-button>
                                        {{ __('Update Order') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.orders.index') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-200">
                    &larr; Back to all orders
                </a>
            </div>
        </div>
    </div>
</x-app-layout>