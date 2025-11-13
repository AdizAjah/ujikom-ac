<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = GalleryItem::latest()->get();
        return view('admin.gallery.index', compact('galleryItems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'caption' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        GalleryItem::create([
            'caption' => $validated['caption'],
            'image_url' => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image uploaded successfully.');
    }

    public function destroy(GalleryItem $gallery)
    {
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($gallery->image_url);
        
        // Hapus record dari database
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }
}