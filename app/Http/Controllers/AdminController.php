<?php

namespace App\Http\Controllers;

use App\Article;
use App\Number;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /*
     * return Admin dashboard
     *
     */
    public function adminPanel()
    {
        return view('admin.adminPanel');
    }

    /*
     * Create article
     *
     */
    public function createArticle()
    {
        return view('admin.createArticle');
    }

    public function saveArticle(Request $request)
    {
         $art = $request->all();
         Article::create($art);









         return redirect()->back();
    }


}
