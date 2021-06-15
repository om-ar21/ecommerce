
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

      <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<link rel="stylesheet" href="/css/main.css">


    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">



</head>
<body>
    <div class="container">
        <header class="blog-header py-3">
  <div class="col-4 ">
              <a class="blog-header-logo text-dark" href="{{route('home')}}">Omar Shop</a>
            </div>


        </header>
  </div>
    @section('content')
<div class="row vh justify-content-center align-item-center">
    @if(empty($articles))
    <div class="alert bg-color text-center color rounded-0">
        votre panier est vide
    </div>
    @else
    <div class="col-12 col-lg-10">

        <div style="min-height: 50vh" class="d-flex rounded-lg lg-color shadow-lg flex-column justify-content-between w-100">
        <div>
            @foreach($articles as $a)
            <ul class="list-group border-bottom border-white flex-column flex-md-row list-group-horizental">
                <li class="list-group-item border-0 color bg-color col-lg-2">
                    {{$a->title}}

                </li>
                 <li class="list-group-item border-0 color bg-color col-lg-2">
                     {{$a->price}}

                 </li>
                  <li class="list-group-item border-0 color bg-color d-flex justify-content-between col-lg-8">
                      <form class="d-flex" action="{{route('change')}}" method="POST">
                          @csrf
                          <input type="number" class="form-control" min="1" max="100" name="quantity" value="{{$a->quantity}}">
                          <button class="btn btn-light mx-3" name="id" type="submit" value="{{$a->id}}">validation</button>

                      </form>
                      <form action="{{route('delete')}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button name="id" value="{{$a->id}}" class="btn btn-outline-danger">remove</button>
                      </form>

                  </li>

            </ul>
            @endforeach
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center bg-color border-0 color">
            <h5>Total:{{$totale}}$</h5>
            <form >
                <button class="btn btn-outline-light px-5">Purchase</button>
            </form>
        </div>

    </div>
    @endif

</div>
</body>
</html>

