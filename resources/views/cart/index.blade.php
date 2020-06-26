@extends('layouts.app')

@section('content')
<div class="container">

  <h2>Cart Page</h2>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

  @foreach($cartItems as $item)

  <tr>
    <td>{{$item->name}}</td>
    <td>${{$item->price}}</td>
    <td>
    <input type="number" value="{{$item-> quantity}}">
    </td>
    <td>
        <a href="{{ route('cart.destroy', $item->id)}}">Delete</a>
    </td>
  <tr>

  @endforeach

  </tbody>
</table>

</div>
@endsection
