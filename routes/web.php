<?php

use App\Http\Controllers\DeteksiYoutubeController;
use Illuminate\Support\Facades\Route;

Route::get('/deteksi', [
    DeteksiYoutubeController::class,
    'index',
])->name('deteksi');

Route::post('/deteksi-youtube', [
    DeteksiYoutubeController::class,
    'detect',
])->name('deteksi.youtube.detect');

Route::get('/deteksi-tiktok', function () {
    return view('deteksi-tiktok');
})->name('deteksi.tiktok');
