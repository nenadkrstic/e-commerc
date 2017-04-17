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
}
