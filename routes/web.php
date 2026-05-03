<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [aboutController::class, 'about']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});
