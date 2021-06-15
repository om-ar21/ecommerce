<html lang="en">
  <head>
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
    <div class="row flex-nowrap justify-content-between align-items-center">

      <div class="col-4 ">
        <a class="blog-header-logo text-dark" href="{{route('home')}}">Omar Shop</a>
      </div>
       <form class="col-4 pt-1 d-flex"  >
        <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit">Chercher</button>
      </form>
      <div class="col-4 d-flex justify-content-end align-items-center">

        <a class="btn btn-sm btn-outline-secondary" href="{{ route('cart')}}">Panier</a>
      </div>
    </div>

  </header>



    <div class="container-fluid justify-content-around">

        @foreach ($categories as $category)
        <div class="justify-content-center d-flex">
            <p class="navbar-brand text-center">{{$category->name}}</p>


        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class=" justify-content-center d-flex  collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($category->children as $childrens)
                        <li class="nav-item">
                        <a type="button" href="{{route('by_sub_cat',$childrens->id)}}"class="btn btn-light">{{$childrens->name}}</a>
                    </li>
                    @endforeach



                </ul>
            </div>
        </nav>
        @endforeach




    </div>



    </nav>
    <div class="container">
         <div class="row">


    </div>
    </div>




</div>
@yield('content')






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
