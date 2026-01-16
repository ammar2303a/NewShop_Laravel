<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
{
    return view('home.Home');
}

    

    public function about()
    {
        return view('home.About');
    }

    public function service(){
        return view('home.Services');
    }
}
