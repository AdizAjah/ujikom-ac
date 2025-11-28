<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // <-- PERBAIKAN LINTER

// Import Controller Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// Import Controller Publik
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController; // <-- CONTROLLER BARU

// === RUTE HALAMAN PUBLIK ===
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/services', [PublicController::class, 'services'])->name('services');
Route::get('/products', [PublicController::class, 'products'])->name('products');
Route::get('/gallery', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Rute bawaan Breeze (Dashboard User Biasa)
Route::get('/dashboard', function () {
    // Arahkan admin ke admin dashboard, user ke user dashboard
    // if (Auth::user()->role === 'admin') { // <-- PERBAIKAN LINTER
    //     return redirect()->route('');
    // }
    // Arahkan user ke halaman 'My Bookings' sebagai dashboard utama mereka
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute Profil Bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    // === RUTE KHUSUS USER (Booking, dsb) ===
    Route::get('/booking/service/{service}', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/my-bookings', [BookingController::class, 'index'])->name('my-bookings');
});

// === GRUP RUTE ADMIN ===
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Rute Khusus Hapus Gambar Service
    Route::delete('/services/image/{id}', [AdminServiceController::class, 'destroyImage'])->name('services.image.destroy');

    Route::resource('products', AdminProductController::class);
    Route::resource('services', AdminServiceController::class);
    Route::resource('gallery', AdminGalleryController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'update', 'show']);
    Route::resource('orders', AdminOrderController::class)->only(['index', 'update', 'show']);
    Route::resource('contacts', AdminContactMessageController::class)->only(['index', 'show', 'destroy']);
    Route::resource('users', AdminUserController::class);
});


// Rute otentikasi (Login, Register, dll)
require __DIR__.'/auth.php';
