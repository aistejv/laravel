@extends('layout.master')

@section('content')

  <form method="POST" action="{{route('category.update', $category)}}">
     @method('PUT')
     @csrf
    <div class="form-group my-5">
      <label for="name">Category's name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter category's name" value="{{$category->name}}">
    </div>


    <button class="btn btn-outline-dark" href="#" role="button" name="submit">Update category</button>

  </form>

@endsection
