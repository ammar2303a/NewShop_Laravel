<?php

use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::view("/admindashboard", 'admin.Home')->middleware('auth');
Route::view("/", 'home.Home');
Route::view("/about", 'home.About');
Route::view("/service", 'home.Services');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
