
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
    <p class="text-center"> Morate biti ulogovani ukoliko želite da naručite artikal ili mozete nas kontaktirati na broj 064-123456</p>
    @endif

<!----------------------------------------------------------------------------------------->

<div id="listingSection" class="container media">
    <div class="media-left">
        <a href="#">
            <img class="media-object" src="../../public/uploads/article-{{$data->id}}/img1.jpg" alt="{{$data->name}}" width="200px">

        </a>

    </div>
    <div class="media-body">
        <div class="col-md-4">
            <p>Atikal</p><hr>
            <p class="media-heading"> {{$data->name}}</p>

            <p>{{$data->description}}</p>
            <p>{{$data->type}}</p>


        </div>
        <div class="col-md-1">
            <p>Cena</p><hr>
            <p class="media-heading"> {{$data->price}} .RSD</p>
        </div>
        <div class="col-md-4">
            <p>Oadberite Broj</p><hr>
                <form method="GET" action="{{url('addToCart')}}/{{$data->id}}">
                        <select id ="number"  name="number" class="form-control input-sm text-center" onChange="selectNumber(this.value)">

                               @foreach($data->articleNumber as $size)

                                    <option  value="{{$size->size}}">{{$size->size}}</option>
                               @endforeach


                        </select><br>



        </div>

    </div>

    <div class="col-md-3 pull-right">
        @if(Auth::user())
            <a href="{{url('addToCart',$data->id)}}" ><button class="btn btn-block btn-primary">Ubaci u korpu</button></a>
        @endif
    </div>
    </form>

    </div><hr>
</div>
<!----------------------------------------------------------------------------------------->





@stop