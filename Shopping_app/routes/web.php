<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/admindashborad", 'admin.Home');
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
