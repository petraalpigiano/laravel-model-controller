<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
