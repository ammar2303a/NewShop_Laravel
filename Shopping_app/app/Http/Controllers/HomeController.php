<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
{
    $products = Product::all(); 
    return view('home.Home', compact('products'));
}

    

    public function about()
    {
        return view('home.About');
    }

    public function service(){
        return view('home.Services');
    }
}
