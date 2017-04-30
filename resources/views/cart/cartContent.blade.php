@extends('layouts.app')

<div class="container">
    <div class="col-md-12">
@section('content')
    @if(Cart::count() > 0)

      @foreach($cartContent as $cart)


          <div id = "cartContent" class=" row">
              <div class="col-md-3">
                  <img src="../public/images/grid3.jpg"/>
              </div>

              <div class="col-md-3">
                  <span><h4>Naziv: {{$cart->id}}</h4></span>
                  <h4>Opis: {{$cart->options->has('desc') ? $cart->options->desc : ''}}</h4>
                  <h4>Cena:{{$cart->price}} .rsd</h4>
                  <h4>broj: {{$cart->options->has('size') ? $cart->options->size : ''}}</h4>




              </div>
              <a href="{{url('singleDelete',$cart->rowId)}}" class="pull-right btn-danger"><button class="btn btn-group-sm btn-primary">Izbaci artikal</button></a>

          </div>

          @endforeach
          <a href="{{url('makeOrder')}}" class="pull-right btn-primary">Potvrdi porudzbinu</a>
    @elseif(Cart::count() == 0)
         <h1 class="text-center">Vasa korpa je prazna</h1>
    @endif
</div></div>
    @stop