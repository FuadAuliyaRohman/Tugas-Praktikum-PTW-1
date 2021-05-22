<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function artikel()
    {
        return view('artikel');
    }

    public function kontak()
    {
        return view('contact');
    }
}
