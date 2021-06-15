@extends('layouts.layout')

@section('content')

 <main class="container">


  <div class="row mb-2">

      <div class="col-md-12">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">design</strong>
          <h5 class="mb-0">{{$product->title}}</h5>
          <p class="mb-auto">{{$product->description}}</p>
          <strong class="mb-auto">{{$product->price .',00 €'}}</strong>
          <form action="{{route('add')}}" method="POST">
              <button name="id" value="{{$product->id}}" class="btn btn-danger" type="submit">Ajouter au panier</button>
              @csrf
          </form>

        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('img/'.$product->image) }}" alt="">

        </div>
      </div>
    </div>








  </div>


</main>

@endsection



