@extends('admin.appAdmin')

@section('content')
<h1 class="text-center">Kreiraj artikl</h1><hr>
<div id="createArticle"class="container">
    {!! Form::open(['url'=>'saveArticle','method'=>'post']) !!}
        {{csrf_field()}}

    <div class="form-group row">

        <div class="col-md-6">

        </div>

    </div>


            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="name" required placeholder="Ime artikla">
                </div>

             </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <textarea rows="5"class="form-control"  name="description" placeholder="Opis artikla"></textarea>
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="brend" placeholder="Marka ili brend artikla">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="lager" placeholder="kolicina">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="number" placeholder="Brojevi artikla, primer unosa (35,36,37,38,39,40)">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="type" placeholder="vrsta (npr: musko ili decije)">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="form-control" type="text" name="price" placeholder="Cena artiklas">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <label name="img">Odaberi sliku artikla</label>
                    <input class="btn btn-primary" type="file" name="img">
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input class="btn btn-primary btn-block" type="submit" value="Snimi artikal">
                </div>

            </div>



    {!! Form::close() !!}
</div>
    @stop