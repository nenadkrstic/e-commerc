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
        $article = Article::findOrfail($id);
        $num = $article->number;
        $numArray = explode(',',$num);


        return view('articles.singleArticle', compact('article','numArray'));
    }
}
