@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-12">

        <div class="card-login card mx-auto mt-5 mb-5" style="width: 26rem;">
            <div class="card-body">
                <h1 class="text-login text-center text-black">Register</h1>

                @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif

                <form method="POST" action="{{ url('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label text-black">Nama</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-black">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-black">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-black">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection