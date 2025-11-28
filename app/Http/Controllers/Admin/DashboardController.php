<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Order;
use App\Models\ContactMessage;
use App\Models\User;
use App\Models\Service;
use App\Models\GalleryItem;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data untuk statistik
        $newBookings = Booking::where('status', 'pending')->count();
        $newOrders = Order::where('status', 'pending')->count();
        $newMessages = ContactMessage::where('is_read', false)->count();
        $totalUsers = User::where('role', 'user')->count();
        $totalServices = Service::count();
        $totalBookings = Booking::count();
        $totalGalleryItems = GalleryItem::count();

        // Recent activities
        $recentBookings = Booking::with('user', 'service')->latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'newBookings',
            'newOrders',
            'newMessages',
            'totalUsers',
            'totalServices',
            'totalBookings',
            'totalGalleryItems',
            'recentBookings',
            'recentMessages'
        ));
    }
}
