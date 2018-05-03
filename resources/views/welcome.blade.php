  @extends('layout.master')

  @section('content')



    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-dark mt-5">Business</h1>
          </div>
        </div>
      </div>
    </header>


    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">What We Do</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
          </p>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Contact Us</h2>
          <address>
            <strong>Start Bootstrap</strong>
            <br>3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </address>
          <address>
            <abbr title="Phone">P:</abbr>
            (123) 456-7890
            <br>
            <abbr title="Email">E:</abbr>
            <a href="mailto:#">name@example.com</a>
          </address>
        </div>
      </div>
      <!-- /.row -->

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
              <a href="{{route('one.product', $product->id)}}" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
      @endforeach

      </div>
      <!-- /.row -->

    </div>

  @endsection
