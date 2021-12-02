@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>
               <div class="card-body">
                <center>
                    <img src="{{asset('images')}}/{{$food->image}}">
                </center>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Details') }}</div>

                <div class="card-body">
                    <p><h2>{{$food->name}}</h2></p>
                    <p class="lead">{{$food->description}}</p>
                    <p><h4>$ {{$food->price}}</h4></p>
                    
                </div>
            </div>
        <div>
            <a href="{{route('food.home')}}">
                <br><button class="btn btn-primary float-right">Back</button>
            </a>
        </div>
        </div>
    </div>
</div>
@endsection
