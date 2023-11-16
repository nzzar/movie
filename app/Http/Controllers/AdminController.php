<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Theater;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
    public function user()
    {
        $users = User::all();
        return view('admin.akun.tampil_akun', ['users' => $users]);
    }

    public function theaters()
    {
        $theaters = Theater::all();
        return view('admin.theater.tampil_theater');
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin.order.tampil_order', ['orders' => $orders]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Theaters $theaters)
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('akun');
    }

}
