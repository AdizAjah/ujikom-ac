<?php

use Illuminate\Support\Facades\Route;

// Import Controller Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;

// Rute Halaman Depan (Homepage) - NANTI KITA ISI DI LANGKAH 4
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute bawaan Breeze (Login, Register, Dashboard User Biasa)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute Profil Bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

// === GRUP RUTE ADMIN ===
// Semua rute di dalam grup ini akan:
// 1. Memerlukan login (middleware 'auth')
// 2. Memerlukan role 'admin' (middleware 'admin')
// 3. Punya prefix URL '/admin' (e.g., /admin/products)
// 4. Punya nama rute 'admin.' (e.g., admin.products.index)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Admin Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Admin CRUD Products
    Route::resource('products', AdminProductController::class);

    // Admin CRUD Services
    Route::resource('services', AdminServiceController::class);

    // Admin CRUD Gallery
    Route::resource('gallery', AdminGalleryController::class)->only(['index', 'store', 'destroy']);

    // Admin View Bookings
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'update', 'show']);

    // Admin View Orders
    Route::resource('orders', AdminOrderController::class)->only(['index', 'update', 'show']);

    // Admin View Contact Messages
    Route::resource('contacts', AdminContactMessageController::class)->only(['index', 'show', 'destroy']);

});


// Rute otentikasi (Login, Register, dll)
require __DIR__.'/auth.php';