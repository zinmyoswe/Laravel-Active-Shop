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
    <td>
    <!-- ${{$item->price}} -->
    $ {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
    </td>
    <td>
    <form action="{{route('cart.update',$item->id)}}">
        <input type="number" name="quantity" value="{{$item-> quantity}}">
        <input type="submit" value="save">
    </form>

    </td>
    <td>
        <a href="{{ route('cart.destroy', $item->id)}}">Delete</a>
    </td>
  <tr>

  @endforeach

  </tbody>
</table>

Total Price::${{\Cart::session(auth()->id())->getTotal()}}
<br>

<a href="" class="btn btn-primary">Checkout</a>

</div>
@endsection
