@extends('layouts.app')


@section('content')
    <div class="container"></divclass>
    @foreach($datas as $data)

        <div class="col-md-4 text-center">

            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top">
                <div class="bottom-2-top">

                    <div class="img"><img src="uploads/article-{{$data->id}}/img1.jpg" alt="/" class="img-responsive gri-wid"></div>

                    <div class="info">
                        <div class="pull-left styl-hdn">
                            <a href="{{url('singleArticle')}}/{{$data->id}}"><h6>Prikazi vise</h6></a>
                        </div>

                        <div class="pull-right styl-price">
                            <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">{{$data->price}} din</span></a></p>
                        </div>

                        <div class="clearfix"></div>
                    </div></div>

            </div>


        </div>

    @endforeach
    </div>

    <div class="container text-center">
        {{$datas->links()}}
    </div>
@stop