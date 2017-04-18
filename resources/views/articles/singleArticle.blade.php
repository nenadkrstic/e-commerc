
@extends('layouts.app')
@section('style')
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <!--shop-kart-js-->
    <script src="../js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="../js/bootstrap.min.js"></script>
    <!--script-->
@stop

@section('content')
    <div class="row text-center">
    <div class="col-md-5 ">

        <!-- normal -->
        <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
                <div class="img"><img src="../images/grid5.jpg" alt="/" class="img-responsive gri-wid"></div>
                <div class="info">

                    <div class="pull-right styl-price">
                        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">{{$article->price}} din</span></a></p>
                    </div>
                    <div class="clearfix"></div>
                </div></div>
            <p>{{$article->name}}</p>
            <p>{{$article->description}}</p>
            <p>{{$article->lager}}</p>
            <p>{{$article->number}}</p>
        </div>


    </div>
    </div>





@stop