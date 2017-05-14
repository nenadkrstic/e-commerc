<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    /*
     * Return on home view articles with pagination
     */
    public function index()
    {
        $art = Article::where('lager', '>' , '0')->paginate(12);
        return view('index',compact('art'));
    }

    /*
     * One method for multiple routes, return type of articles, for example for mans or kids
     */
    public function articleType(Request $request)
    {
        $datas = $request->path();
        $datas = Article::where('type', $datas)->orderBy('id', 'DESC')->paginate(20);
        return view('articles.'.$request->path(), compact('datas'));

    }
    /*
     * return single aricle view
     */
    public function singleArticle($id)
    {
        $data = Article::findOrfail($id);
        return view('articles.singleArticle', compact('data'));
    }

    /*
     * load data with ajax
     *
     */

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
