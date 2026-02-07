<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function show($id=1)
    {
        $title = 'Layanan';
        return view('layanan.show', compact('title'));
    }
}
