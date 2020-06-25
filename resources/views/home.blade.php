@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

       @foreach($allProducts as $product)
       <img src="{{ asset('img/bd.jpg') }}" alt="" width="300"><br>
          {{$product->name}}<br>
          ${{$product->price}}<br>
          <a href="{{route('cart.add', $product->id)}}">Add To Cart</a><br>
       @endforeach




                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

        </div>
    </div>
</div>
@endsection
