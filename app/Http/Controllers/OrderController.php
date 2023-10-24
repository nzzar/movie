<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Faker\Factory as Faker;
use App\Models\Order;
use App\Models\Seat;
use App\Models\User;
use App\Services\Midtrans\CreateSnapTokenService;

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

    public function insertData (Request $request)
    {
        $faker = Faker::create('id_ID');
        $order_id = $faker->bothify('?????-#####');
        $request['order_id'] = $order_id;
        $midtrans = new CreateSnapTokenService($request);
        $snapToken = $midtrans->getSnapToken();
        $validatedData = $request->validate([
            'order_id' => 'required|min:9|max:255',
            'total_price' => 'required|numeric|between:1,99999999999999',
            'city' => 'required',
            'theater' => 'required',
            'type' => 'required',
            'date' => 'required',
            'time' => 'required',
            'movie' => 'required',
            'id_movie' => 'required',
            'jml_tiket' => 'required|numeric|between:1,20',
        ]);
        $validatedData['snap_token'] = $snapToken;
        $validatedData['payment_id'] = $order_id;
        $validatedData['seat_id'] = $order_id;
        $validatedData['user_id'] = 1;

        $id = Order::find($order_id);

        if ($id == null) {
            Order::create($validatedData);
            $seat = array();

            foreach ($request->seat as $item) {
                array_push($seat, [
                    'order_id' => $order_id,
                    'no_seat' => $item,
                    "created_at" =>  date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);
            }

            Seat::insert($seat);
        }

        session()->forget('order_id');
        session()->put('order_id', $order_id);

        return redirect('payment');
    }

    public function order(Order $order)
    {
        $order_id = session()->get('order_id');
        $seat = Seat::where('order_id', $order_id)->get();

        $order = Order::find($order_id);
        $movie = Movie::getDetails($order->id_movie);
        return view('order.pay', [
            'title' => "Pembayaran",
            'active' => 'active',
            'order' => $order,
            'seat' => $seat,
            'movie' => $movie,
            'snap' => $order->snap_token,
        ]);
    }
}
