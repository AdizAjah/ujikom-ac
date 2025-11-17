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
    $request->validate([
        'service_id'    => 'required|exists:services,id',
        'booking_date'  => 'required|date_format:Y-m-d|after_or_equal:today',
        'user_phone'    => [
            'required',
            'regex:/^628[0-9]{8,13}$/'
        ],
        'user_address'  => 'required|string|min:5',
        'notes'         => 'nullable|string',
    ]);

    // Simpan booking
    Booking::create([
        'service_id'   => $request->service_id,
        'user_id'      => auth()->id(),
        'booking_date' => $request->booking_date,
        'user_phone'   => $request->user_phone,
        'user_address' => $request->user_address,
        'notes'        => $request->notes,
        'status'       => 'pending'
    ]);

    return redirect()->route('my-bookings')->with('success', 'Booking Anda telah berhasil dibuat! Kami akan segera menghubungi Anda untuk konfirmasi.');
}

}