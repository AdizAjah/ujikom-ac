<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product;
use App\Models\GalleryItem;

class PublicController extends Controller
{
    /**
     * Menampilkan Halaman Home
     * dengan beberapa produk dan jasa
     */
    public function home()
    {
        $services = Service::latest()->take(6)->get();
        $products = Product::latest()->take(8)->get();

        return view('welcome', compact('services', 'products'));
    }

    /**
     * Menampilkan semua Jasa
     */
    public function services()
    {
        $services = Service::latest()->paginate(12);
        return view('pages.services', compact('services'));
    }

    /**
     * Menampilkan semua Produk
     */
    public function products()
    {
        $products = Product::latest()->paginate(12);
        return view('pages.products', compact('products'));
    }

    /**
     * Menampilkan Galeri
     */
    public function gallery()
    {
        $galleryItems = GalleryItem::latest()->get();
        return view('pages.gallery', compact('galleryItems'));
    }

    /**
     * Menampilkan halaman Kontak
     */
    public function contact()
    {
        return view('pages.contact');
    }
}