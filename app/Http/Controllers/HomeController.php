<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Selamat datang';
        return view('home.index', compact('title'));
    }
}
