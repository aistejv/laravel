@extends('layout.master')

@section('content')
  @if(session('success'))
      <div class="alert alert-success col-sm-4 my-5">
        {{session('success')}}
      </div>
  @endif
  @auth
  <div class="col-md-12 my-5">
  <a class="btn btn-outline-dark" href="{{route('add.product')}}" role="button">Add new product</a>
  </div>
  @endauth

  <div class="row">
    @foreach($products as $product)
    <div class="col-sm-4 my-4">
      <div class="card">
        <img class="card-img-top" src="{{$product->image_url}}" alt="">
        <div class="card-body">
          <h4 class="card-title">{{$product->title}}</h4>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">Quantity: {{$product->quantity}} units.</p>
          <h3 class="card-text">{{$product->price}} &euro;</h3>
        </div>
        <div class="card-footer">
          <a href="{{route('one.product', $product->id)}}" class="btn btn-outline-dark">Find Out More!</a>
        </div>
      </div>
    </div>
  @endforeach

  </div>

@endsection
