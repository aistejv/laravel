@extends('layout.master')

@section('content')

  {{-- <div class="row">
    @foreach($manufacturers as $manufacturer)
    <div class="col-sm-4 my-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Name: {{$manufacturer->name}}</h4>
          <p class="card-text">Country: {{$manufacturer->country}}</p>

        </div>
        <div class="card-footer">
          <a href="3" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
  @endforeach

  </div> --}}

<div class="row">
  <div class="col-md-4 my-5">
  <table class="table table-dark" "col-md-8 my-5">
    <thead>
      <tr>
        <th scope="col">Manufacturer name</th>
        <th scope="col">Country</th>
      </tr>
    </thead>
  @foreach($manufacturers as $manufacturer)
    <tbody>
      <tr>
        <td>{{$manufacturer->name}}</td>
        <td>{{$manufacturer->country}}</td>
      </tr>
    </tbody>
  @endforeach
  </table>
</div>
</div>
@endsection
