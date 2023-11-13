<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TheatersController extends Controller
{
    public function theater()
    {
        return view('theaters.theater', [
            "title" => "Nobar 21",
            "active" => 'theaters'
        ]);
    }
}
