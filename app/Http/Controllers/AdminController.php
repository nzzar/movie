<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('akun.tampil_akun', ['users' => $users]);
    }

    public function theaters()
    {
        $theaters = Theater::all();
        return view('theater.tampil_order', ['orders' => $orders]);
    }

    public function orders()
    {
        $orders = Order::all();
        return view('order.tampil_order', ['orders' => $orders]);
    }

}
