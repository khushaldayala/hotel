@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('All Category') }}
                  <span class="float-right">
                    <a href="{{route('food.create')}}">
                      <button class="btn btn-outline-secondary">Add Food
                      </button>
                    </a>
                  </span>
                </div>

                <div class="card-body">
                    <table class="table">
                          <thead class="table-success">
                            <tr>
                              <th scope="col">Image</th>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Price</th>
                              <th scope="col">Category</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(count($foods))
                            @foreach($foods as $key=>$food)
                            <tr>
                              <td><img src="{{asset('images')}}/{{$food->image}}" width="100"></td>
                              <td>{{$food->name}}</td>
                              <td>{{$food->description}}</td>
                              <td>$ {{$food->price}}</td>
                              <td>{{$food->category->name}}</td>
                              <td>
                                  <a href="{{route('food.edit',[$food->id])}}">
                                      <button class="btn btn-success">Edit</button>
                                  </a>
                              </td>
                              <td><a href="">
                                    <form action="{{route('food.destroy',[$food->id])}}" method="post">@csrf
                                    {{method_field('DELETE')}}
                                      <button class="btn btn-success">Delete</button>

                                    </form>
                                  </a>

                              </td>
                            </tr>
                            @endforeach
                            @else
                            <td>No Categories Found</td>
                            @endif
                          </tbody>
                    </table>
                    {{$foods->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
