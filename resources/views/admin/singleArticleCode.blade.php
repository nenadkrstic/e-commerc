@extends('layouts.app')


@section('content')

    @if(!Auth::user())
        <p class="text-center"> Morate biti ulogovani ukoliko želite da naručite artikal ili mozete nas kontaktirati na broj 064-123456</p>
    @endif

    <!----------------------------------------------------------------------------------------->
@if($data)
    <div id="listingSection" class="container media">

        <div class="media-body">
            <div class="col-md-1">
                <p><strong>Id</strong></p><hr>
                <p class="media-heading"> {{$data->id}}</p>

            </div>

            <div class="col-md-3">
                <p><strong>Atikal</strong></p><hr>
                <p class="media-heading"> {{$data->name}}</p>
                <p>{{$data->description}}</p>
                <p>{{$data->type}}</p>
            </div>
            <div class="col-md-2">
                <p><strong>Šifra artikla</strong></p><hr>
                <p class="media-heading"> {{$data->article_code}}</p>

            </div>

            <div class="col-md-2">
                <p><strong>Cena</strong></p><hr>
                <p class="media-heading"> {{$data->price}} .RSD</p>
            </div>

            <div class="col-md-2">
                <p><strong>Odaberite Broj</strong></p><hr>
                <form method="GET" action="{{url('addToCart')}}/{{$data->id}}">

                    <select id ="number"  name="number" class="form-control input-sm text-center" onChange="selectNumber(this.value)">
                        @foreach($data->articleNumber as $size)
                            <option  value="{{$size->size}}">{{$size->size}}</option>
                        @endforeach
                    </select><br>
            </div>

        </div>
        <div class="col-md-2 pull-right">
            @if(Auth::user())
                <a href="{{url('addToCart',$data->id)}}" ><button class="btn btn-block btn-primary">Ubaci u korpu</button></a>
            @endif
        </div>
        </form>
    </div><hr>

    <div class="container text-center">
        <div id="myCarousel" class="carousel slide col-md-5" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center" role="listbox">

                @foreach($data->articleImage->chunk(1) as $count => $item)


                    <div class="item {{ $count == 0 ? 'active' : ' '}} text-center">

                        @foreach($item as $image)

                            <img src="../public/uploads/article-{{$data->id}}/{{$image->image}}" alt="..." class="img-rounded img-responsive" width="400px">

                        @endforeach

                    </div>

                @endforeach



            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    @else
        <div class="container alert-danger">
            <h2 class="text-center">Nepostoji artikal pod tom sifrom</h2>
        </div>
    @endif
    <!----------------------------------------------------------------------------------------->





@stop