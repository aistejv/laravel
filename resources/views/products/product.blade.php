@extends('layout.master')

@section('content')

  <div class="row">
    <div class="col-sm-8 my-5">
      <div class="card">
        <img class="card-img-top" src="{{$product->image_url}}" alt="">
        <div class="card-body">
          <h4 class="card-title">{{$product->title}}</h4>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">Quantity: {{$product->quantity}} units.</p>
          <h3 class="card-text">{{$product->price}} &euro;</h3>
        </div>
      </div>
    </div>
    @auth
    <div class="col-md-8">
    <a class="btn btn-outline-dark" href="{{route('product.edit', $product)}}" role="button">Edit product</a>
    </div>
    <div class="col-md-8">
    <form method="POST" action="{{route('product.delete', $product)}}">
      @method('DELETE')
      @csrf
    <button type="submit" class="btn btn-outline-dark" href="#" role="button">Delete product</button>
  </form>
</div>
@endauth
</div>
@endsection
