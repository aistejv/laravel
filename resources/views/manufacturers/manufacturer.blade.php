@extends('layout.master')

@section('content')


  <div class="row">
    <div class="col-md-4 my-5">
    <table class="table table-dark" "col-md-8 my-5">
      <thead>
        <tr>
          <th scope="col">Manufacturer's name</th>
          <th scope="col">Country</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$manufacturer->name}}</td>
          <td>{{$manufacturer->country}}</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>

  <div class="col-md-8">
    <a class="btn btn-outline-dark" href="{{route('manufacturer.edit', $manufacturer)}}" role="button">Edit manufacturer</a>
  </div>

  <div class="col-md-8">
    <form method="POST" action="{{route('manufacturer.delete', $manufacturer)}}">
      @method('DELETE')
      @csrf
    <button type="submit" class="btn btn-outline-dark" href="#" role="button">Delete manufacturer</button>
    </form>
  </div>

@endsection
