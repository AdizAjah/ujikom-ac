<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /**
     * Menampilkan halaman Kontak
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Menyimpan pesan dari form kontak
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact')->with('success', 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
    }
}