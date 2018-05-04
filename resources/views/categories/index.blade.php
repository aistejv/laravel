@extends('layout.master')

@section('content')
  @if(session('success'))
      <div class="alert alert-success col-sm-4 my-5">
        {{session('success')}}
      </div>
  @endif

  {{-- <div class="row">
  @foreach($categories as $category)
    <div class="col-sm-8 my-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Name: {{$category->name}}</h4>
        </div>
        <div class="card-footer">
          <a href="3" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
  @endforeach

  </div> --}}

<div class="col-md-2 my-5">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Category name</th>
      </tr>
    </thead>
  @foreach($categories as $category)
    <tbody>
      <tr>
        <td>{{$category->name}}</td>
        <td><a href="{{route('one.category', $category->id)}}" class="btn btn-outline-dark">Find Out More!</a></td>
      </tr>
    </tbody>
  @endforeach
  </table>
</div>



@endsection
