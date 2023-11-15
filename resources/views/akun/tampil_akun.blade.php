@extends('admin.admin')

@section('judul_konten')
Data Akun
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Akun</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th>Password</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    {{-- <td>{{$user->password}}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
