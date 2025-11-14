<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Menampilkan halaman riwayat booking milik user yang login
     */
    public function index()
    {
        // Ambil booking milik user yang sedang login
        $bookings = Auth::user()->bookings()->with('service')->latest()->paginate(10);
        
        return view('pages.my-bookings', compact('bookings'));
    }

    /**
     * Menampilkan form untuk membuat booking baru
     */
    public function create(Service $service)
    {
        // User harus login untuk booking
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk membuat booking.');
        }

        return view('pages.booking-create', compact('service'));
    }

    /**
     * Menyimpan booking baru ke database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date|after_or_equal:today',
            'user_address' => 'required|string|max:1000',
            'user_phone' => 'required|string|max:20',
            'notes' => 'nullable|string|max:1000',
        ]);

        // Tambahkan user_id ke data yang divalidasi
        $validated['user_id'] = Auth::id();

        Booking::create($validated);

        return redirect()->route('my-bookings')->with('success', 'Booking Anda telah berhasil dibuat! Kami akan segera menghubungi Anda untuk konfirmasi.');
    }
}