<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->latest()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // Memuat relasi item dan produk di dalam item
        $order->load('items.product');
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,paid,shipping,completed,cancelled',
            'shipping_tracking_number' => 'nullable|string|max:255',
        ]);

        $order->update($validated);

        return redirect()->route('admin.orders.index')->with('success', 'Order status updated.');
    }
}