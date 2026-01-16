<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::view("/admindashboard", 'admin.Home')->middleware('auth');
// Route::view("/", 'home.Home');
// Route::view("/about", 'home.About');
// Route::view("/service", 'home.Services');

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/dashboard', function () {

    if (auth()->user()->role === 'admin') {
        return redirect('/admindashboard');
    }

    return redirect('/');

})->name('dashboard');

Route::get('/addproduct',[AdminController::class, 'addproduct']);