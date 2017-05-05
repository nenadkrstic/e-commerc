@extends('admin.appAdmin')

@section('content')
<div class="container">
    @if(Session::has('cart'))
        <h3 class="text-center ">{{Session::get('cart')}}</h3>

    @endif
     @foreach($cart as $c)
<div class="container">
         <div class="col-md-5">
             <h2>{{$c->fname}}</h2>
           <h3>{{$c->lname}}</h3>
           <h4>{{$c->addres}}</h4>
            <h4>{{$c->city}}</h4>
             <h4>{{$c->phone}}</h4>

         </div>
        <div class="coll-md-5">
            <h2>{{$c->name}}</h2>
             <h4>{{$c->article_number}}</h4>
            <h4>{{$c->price}}</h4>
            <h4> {{$c->description}}</h4>
            <h4> {{$c->brend}}</h4>
            <h4>{{$c->type}}</h4>


            <img src="../../public/uploads/article-/img1.jpg">

             <a href="{{url('closeOrder')}}/{{$c->id}}">Zatvori poridzinu</a>
         </div>
</div>
         @endforeach
     </div>
@stop