<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('akun.tampil_akun', ['users' => $users]);
    }


    public function login()
    {
        // if(Auth::check())
        return view('auth.login', [
            "title" => "Nobar 21",
            "active" => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('order');
        } else {
            return redirect('login')->with('error_message', 'Wrong email or password');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form()
    {
        return view('auth.register', [
            "title" => "Nobar 21",
            "active" => 'register'
        ]);
    }

    public function register(Request $request) 
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed'
        ]);

        User::create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }
}
