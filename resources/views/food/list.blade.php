@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	@foreach($categories as $category)
    	<div class="col-md-12">
    		<h2 style="color:blue;">{{$category->name}} test</h2>
    		<div class="jumbotron">
    			<div class="row">
    				@foreach(App\Food::where('category_id',$category->id)->get() as $food)
    				<div class="col-md-3">
                    <a href="{{route('food.view',[$food->id])}}">
    					<img src="{{asset('images')}}/{{$food->image}}" width="200" height="155">
                    </a>
    					<p class="text-center">{{$food->name}}
    						<span>${{$food->price}}</span>
    					</p>
    					<p class="text-center"><a href="{{route('food.view',[$food->id])}}">
    						<button class="btn btn-outline-danger">
    						view
    						</button>
    					</a></p>
    				</div>
    				@endforeach()
    		</div>
    	</div>
    	@endforeach
    </div>
</div>
@endsection