@extends('layouts.layout')


@section('content')
  <main class="container">


  <div class="row mb-2">
      @foreach ($produits as $product)
      <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         @foreach ($product->subcategory as $subcategory)<strong class="d-inline-block mb-2 text-success">{{$subcategory->name}}</strong>
         @endforeach 
         <h5 class="mb-0">{{$product->title}}</h5>
          
          <p class="mb-auto">{{$product->subtitle}}</p>
          <strong class="mb-auto">{{$product->price .',00 €'}}</strong>
          <a href="{{ route('article', $product->slug) }}" class="stretched-link btn btn-info" >voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('img/'.$product->image) }}" alt="">

        </div>
      </div>
    </div>

      @endforeach






  </div>


</main>
@endsection
