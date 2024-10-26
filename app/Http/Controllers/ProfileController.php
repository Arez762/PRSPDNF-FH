<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sejarah()
    {
        return view('profile-sejarah');
    }

    public function visidanmisi()
    {
        return view('profile-visidanmisi');
    }

    public function tenagaAhli()
    {
        return view('profile-tenagaahli');
    }

    public function galleryFoto()
    {
        return view('gallery-foto');
    }

    public function galleryVideo()
    {
        return view('gallery-video');
    }

    public function pelayananPersyaratan()
    {
        return view('pelayanan-persyaratan');
    }

    public function pelayananAlur()
    {
        return view('pelayanan-alur');
    }

    public function aboutUs()
    {
        return view('aboutus');
    }
}
