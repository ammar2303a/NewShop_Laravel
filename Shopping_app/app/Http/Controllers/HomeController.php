<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Admin
        if ($user->role === 'admin') {
            return redirect('/admindashboard');
        }

        // Normal User (Jetstream dashboard)
        return redirect('/');
    }
}
