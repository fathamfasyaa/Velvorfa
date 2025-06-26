<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/tentang-kami', function () {
    return view('pages.tentangkami');
})->name('tentang');
