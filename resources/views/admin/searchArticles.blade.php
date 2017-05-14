@extends('admin.appAdmin')

@section('content')
<h2 class="text-center">Pretraži artikal po šifri</h2>
    <form action="{{url('search')}}" mrthod="GET" onkeyup="searchArticles();return false;">
        <div class="container">
            <div class="container-fluid">
                <div class="col-sm-6 col-sm-offset-3">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">

                            <input type="text" name="search" id="article_code" class="form-control"  >
                            <span class="input-group-addon">

                    </span>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="articlesShow" class="container"></div>

@stop