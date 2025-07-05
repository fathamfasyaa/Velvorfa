<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/tentang-kami', function () {
    return view('pages.tentangkami');
})->name('tentang');


Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'send'])->name('kontak.kirim');
