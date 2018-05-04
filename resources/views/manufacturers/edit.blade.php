@extends('layout.master')

@section('content')

  <form method="POST" action="{{route('manufacturer.update', $manufacturer)}}">
     @method('PUT')
     @csrf
    <div class="form-group my-5">
      <label for="name">Manufacturer name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter manufacturer's name" value="{{$manufacturer->name}}">
    </div>
    <div class="form-group">
      <label for="description">Country</label>
      <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="{{$manufacturer->country}}">
    </div>

    <button class="btn btn-outline-dark" href="#" role="button" name="submit">Update manufacturer</button>

  </form>

@endsection
