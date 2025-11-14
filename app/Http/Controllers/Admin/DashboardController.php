<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Order;
use App\Models\ContactMessage;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data untuk statistik
        $newBookings = Booking::where('status', 'pending')->count();
        $newOrders = Order::where('status', 'pending')->count();
        $newMessages = ContactMessage::where('is_read', false)->count();
        $totalUsers = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('newBookings', 'newOrders', 'newMessages', 'totalUsers'));
    }
}