<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index', [
            'title' => 'Pembayaran',
            'active' => 'order',
            "cities" => Movie::getCities(),
        ]);
    }
}
