<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('deteksi');
})->name('deteksi');

Route::get('/deteksi-tiktok', function () {
    return view('deteksi-tiktok');
})->name('deteksi.tiktok');
