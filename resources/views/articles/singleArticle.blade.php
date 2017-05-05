
@extends('layouts.app')
@section('style')
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../css/style.master.css" rel="stylesheet" type="text/css"/>
    <!--shop-kart-js-->
    <script src="../js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Jscript.js"></script>
    <!--script-->
@stop

@section('content')

@if(!Auth::user())
    <p class="text-center"> Morate biti ulogovani ukoliko želite da naručite artikal</p>
    @endif
<div class="container text-center" >
    <div class="col-md-3 pull-left"></div><div class="col-md-8 text-left" id="singleArticle">
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img src="../images/grid5.jpg" alt="/" class="media-object">
            </a>
        </div>
        <div class="media-body" id="textSingleArticle">

            <p>Naziv artikla: {{$article->name}}</p>
            <p>{{$article->description}}</p>
            <p>Cena artkla: <strong>{{$article->price}}</strong> RSD</p><br>
               <div class="col-md-4 text-center">
                   <form method="GET" action="{{url('addToCart')}}/{{$article->id}}">
                        <select id ="number" onSubmit="number()" name="number" class="form-control input-sm text-center" onChange="selectNumber(this.value)">

                            @foreach($articleNumber as $num)

                                <option  value="{{$num->size}}">{{$num->size}}</option>


                            @endforeach
                        </select><br>



                        </div>
                            <div class="col-md-4 pull-right">
                                @if(Auth::user())
                                   <a href="{{url('addToCart',$article->id)}}" ><button class="btn btn-block btn-primary">Ubaci u korpu</button></a>
                                @endif



                        </div>
                    </form>
            </div>
       </div>
   </div>

</div>





@stop