<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = PhotoGallery::paginate(20); // Menggunakan pagination dengan 20 item per halaman
        return view('gallery.index', compact('photos'));
    }
}
