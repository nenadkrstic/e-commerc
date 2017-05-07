<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    public function index()
    {
        $art = Article::all();

        return view('index',compact('art'));
    }

    public function singleArticle($id)
    {

       $data = Article::findOrfail($id);
        return view('articles.singleArticle', compact('data'));
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function support()
    {
        return view('layouts.support');
    }

    public function delivery()
    {
        return view('layouts.delivery');
    }

    public function maps()
    {
        return view('layouts.maps');
    }
}
