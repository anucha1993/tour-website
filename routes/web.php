<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\ResponseCache\Middlewares\CacheResponse;

// Route::get('/', function () {
//     return view('home');
// })->name('home');


// Apply response cache middleware to public routes
// Route::middleware([CacheResponse::class])->group(function () {
    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('/packages', function () {
        return view('packages');
    })->name('packages');
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
// });

// Authentication Routes (do not cache)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
