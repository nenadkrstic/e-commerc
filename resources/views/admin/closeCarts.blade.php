@extends('admin.appAdmin')

@section('content')
    <div class="container">

        @foreach($cart as $c)

            <div class="col-md-5">
                <h2>{{$c->name}}</h2>
                <h3>{{$c->lname}}</h3>
                <h4>{{$c->addres}}</h4>
                <h4>{{$c->city}}</h4>
                <h4>{{$c->phone}}</h4>
                <h4>{{$c->article_number}}</h4>
                <h4>{{$c->price}}</h4>
                <h4>  {{$c->description}}</h4>
                <h4> {{$c->brend}}</h4>
                <h4>{{$c->type}}</h4>
                <h4>{{$c->image}}</h4><hr>
                <a href="{{url('closeOrder', $c->id)}}">Zatvori poridzinu</a><hr>
            </div>
        @endforeach
    </div>
@stop