@extends('layouts.main')

@section('slider')
    @include('partials.slider')
@endsection

@section('container')
<div class="container text-center">
    <div class="row d-flex justify-content-between pt-5">
        <div class="card" style="width: 25rem;">
            <img src="{{url('images/mm.jpg')}}" class="card-img-top pt-3" alt="...">
            <div class="card-body">
            <h5 class="card-title text-black">Theater Mall Metropolitan Bekasi</h5>
            </div>
        </div>
        
        <div class="card" style="width: 25rem;">
            <img src="{{url('images/braga.jpg')}}" class="card-img-top pt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title text-black">Theater Braga</h5>
            </div>
        </div>

        <div class="card" style="width: 25rem;">
            <img src="{{url('images/csb.jpg')}}" class="card-img-top pt-3" alt="...">
            <div class="card-body">
            <h5 class="card-title text-black">Theater CSB</h5>
            </div>
        </div>
    </div>

@endsection