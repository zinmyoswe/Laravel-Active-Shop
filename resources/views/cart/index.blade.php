@extends('layouts.app')

@section('content')

  <h2>Cart Page</h2>

  @foreach($cartItems as $item)
    {{$item->name}}
    ${{$item->price}}
    {{$item-> quantity}}<br>
  @endforeach

@endsection
