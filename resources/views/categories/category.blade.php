@extends('layout.master')

@section('content')


  <div class="row">
    <div class="col-md-4 my-5">
    <table class="table table-dark" "col-md-8 my-5">
      <thead>
        <tr>
          <th scope="col">Category's name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$category->name}}</td>

        </tr>
      </tbody>
    </table>
  </div>
  </div>

  <div class="col-md-8">
    <a class="btn btn-outline-dark" href="{{route('category.edit', $category)}}" role="button">Edit category</a>
  </div>

  <div class="col-md-8">
    <form method="POST" action="{{route('category.delete', $category)}}">
      @method('DELETE')
      @csrf
    <button type="submit" class="btn btn-outline-dark" href="#" role="button">Delete category</button>
    </form>
  </div>

@endsection
