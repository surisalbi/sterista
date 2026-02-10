<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $title = 'Pembayaran';
        return view('payment.index', compact('title'));
    }
}
