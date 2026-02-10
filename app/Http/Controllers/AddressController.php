<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function list()
    {
        $title = 'Alamat';
        return view('address.list', compact('title'));
    }
}
