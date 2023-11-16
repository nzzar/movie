@extends('admin.admin')

@section('judul_konten')
Data Order
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Order</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>ID Order</th>
                    <th>ID Payment</th>
                    <th>ID Seat</th> --}}
                    <th>City</th>
                    <th>Type</th>
                    <th>Theater</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Jumlah Tiket</th>
                    <th>Harga</th>
                    <th>Movie</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    {{-- <td>{{$order->order_id}}</td>
                    <td>{{$order->payment_id}}</td>
                    <td>{{$order->seat_id}}</td> --}}
                    <td>{{$order->city}}</td>
                    <td>{{$order->type}}</td>
                    <td>{{$order->theater}}</td>
                    <td>{{$order->date}}</td>
                    <td>{{$order->time}}</td>
                    <td>{{$order->jml_tiket}}</td>
                    <td>{{$order->total_price}}</td>
                    <td>{{$order->movie}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
