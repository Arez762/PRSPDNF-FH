<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('profile-sejarah', function () {
    return view('profile-sejarah');
});

Route::get('profile-visidanmisi', function () {
    return view('profile-visidanmisi');
});

Route::get('profile-tenagaahli', function () {
    return view('profile-tenagaahli');
});

Route::get('gallery-foto', function () {
    return view('gallery-foto');
});

Route::get('gallery-video', function () {
    return view('gallery-video');
});

Route::get('pelayanan-persyaratan', function () {
    return view('pelayanan-persyaratan');
});

Route::get('pelayanan-alur', function () {
    return view('pelayanan-alur');
});

Route::get('aboutus', function () {
    return view('aboutus');
});