<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('layouts.landingpage');
    }

    public function toko()
    {
        return view('home.toko');
    }

    public function shopingcart()
    {
        return view('home.shopingcart');
    }
    
    public function checkout()
    {
        return view('home.checkout');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function kontak()
    {
        return view('home.kontak');
    }
}
