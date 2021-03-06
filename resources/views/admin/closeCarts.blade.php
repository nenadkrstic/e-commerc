@extends('admin.appAdmin')

@section('content')
    <div class="container">

        <h2 class="text-center ">Zatvorene porudzbine</h2><hr>

        @foreach($cart as $data)
            <div id="listingSection" class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="../public/uploads/article-{{$data->cartToArticle->id}}/img1.jpg" alt="{{$data->cartToArticle->name}}" width="200px">

                    </a>

                </div>
                <div class="media-body">
                    <div class="col-md-4">
                        <p>Atikal</p><hr>

                        <p class="media-heading">{{$data->cartToArticle->name}}</p>
                        <p class="media-heading">{{$data->cartToArticle->description}}</p>
                        <p class="media-heading">{{$data->cartToArticle->brand}}</p>
                        <p class="media-heading">{{$data->cartToArticle->type}}</p>
                        <p class="media-heading">{{$data->cartToArticle->price}}</p>

                    </div>
                    <div class="col-md-1">
                        <p>Cena</p><hr>
                        <h5 class="media-heading"> {{$data->price}}</h5>
                    </div>
                    <div class="col-md-3">
                        <p>Podaci</p><hr>
                        <h5 class="media-heading">{{$data->cartToUser->fname}} {{$data->cartToUser->lname}}</h5>
                        <h5 class="media-heading">{{$data->cartToUser->city}}</h5>
                        <h5 class="media-heading">{{$data->cartToUser->addres}}</h5>
                        <h5 class="media-heading">{{$data->cartToUser->number}}</h5>

                    </div>

                    <div class="col-md-2">
                        <p>Telefon</p><hr>
                        <h5 class="media-heading">{{$data->cartToUser->phone}}</h5><hr>
                        <p class="media-heading">Broj korpe: {{$data->id}}</p>
                        <p class="media-heading">Korpa kreirana: {{$data->cartToUser->created_at}}</p>

                    </div>


                </div><hr>
            </div>

        @endforeach
        {{$cart->links()}}
    </div>
@stop