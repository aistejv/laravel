@extends('layout.master')

@section('content')

<div class="col-md-8 my-5">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form method="POST" action="{{route('product.store')}}">
     @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter product title" value="{{old('title')}}">
    </div>
    <div class="form-group">
      <label for="description">Product description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{old('description')}}">
    </div>
    <div class="form-group">
      <label for="price">Product price</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{old('price')}}">
    </div>

    <div class="form-group">
      <label for="manufacturer">Manufacturer</label>
      <select id="manufacturer" class="form-control" name="manufacturer_id">
        <option value="">Choose...</option>
        @foreach($manufacturers as $manufacturer)
        <option  value="{{$manufacturer->id}}"
           {{old('manufacturer_id') == $manufacturer->id ? 'selected' : ''}}>{{$manufacturer->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="category">Category</label>
      <select id="category" class="form-control" name="category_id">
        <option value="">Choose...</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="{{old('quantity')}}">
    </div>
    <div class="form-group">
      <label for="image">Product picture</label>
      <input type="text" name="image_url" class="form-control" id="image" placeholder="Image url" value="{{old('image_url')}}">
    </div>

    <button class="btn btn-outline-dark" href="#" role="button" name="submit">Add new product</button>
  </form>
</div>

@endsection
