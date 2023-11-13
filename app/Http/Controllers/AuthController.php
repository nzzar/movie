<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            "title" => "Nobar 21",
            "active" => 'login'
        ]);
    }

    public function authenticate()
    {

    }
}
