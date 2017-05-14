@extends('layouts.app')


@section('content')
    @foreach($datas as $data)
        {{print_r($data->articleImage)}}
    @endforeach
@stop