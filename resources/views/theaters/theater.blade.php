@extends('layouts.main')

@section('slider')
    @include('partials.slider')
@endsection

@section('container')
<div class="container text-center">
    <div class="row">
        <div class="col-12 d-flex justify-content-between pt-5">
        <div class="card" style="width: 20rem;">
            <img src="{{url('images/mm.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-black">Theater Mall Metropolitan Bekasi</h5>
            </div>
        </div>
        
        <div class="card" style="width: 20rem;">
            <img src="{{url('images/braga.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-black">Theater Braga</h5>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="{{url('images/csb.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-black">Theater CSB</h5>
            </div>
        </div>
    </div>
    </div>

@endsection