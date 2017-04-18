@extends('layouts.app')


@section('content')
    @if(Cart::count() > 0)
      @foreach($cartContent as $cart)
          <h3>{{print_r($cart->name)}}</h3>
          <h3>{{print_r($cart->price)}}</h3>
          @endforeach

    @endif
    @stop