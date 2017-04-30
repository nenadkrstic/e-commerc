<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Numbers;
use Session;
use Image;
use App\Images;
use ArticleRequest;
use File;



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
        if ($request->hasFile('img')) {




            //Get last insert article ID
            $lastId =  Article::all()->last()->id;
           

            //Create directory for new listing and put uploaded images from array at same dir.
            File::makeDirectory('../public/uploads/article-'.$lastId);
            $img = $request->file('img');
            $count = 0;
            foreach ($img as $i) {
                $count++;

                // save multiple images in file
                $file = '.' . $i->getClientOriginalExtension();
                Image::make($i)->resize('300', '300')->save('../public/uploads/article-'.$lastId.'/img'.$count.''.$file);

                /*
                *Create
                */
                $image['article_id'] = $lastId;
                $image['image'] = 'img'.$count.''.$file;

                Images::create($image);
            }

            /*
         * Create Articles
         *
         */
            $art = $request->all();
            Article::create($art);

            $numbers = $request->number;
            /*
             * Create numbers for already inserted article at table numbers width foreign key on articles id
             *
             */

            $numbers = explode(',', $numbers);
            foreach ($numbers as $number) {
                $numberArt['article_id'] = $lastId;
                $numberArt['size'] = $number;
                Numbers::create($numberArt);
            }

            /*
             *  Create numbers for already inserted article at table numbers width foreign key on articles id
             *
             */



            Session::flash('create_article', 'Uspesno ste snimili artikal u bazu');
            return redirect()->back();

    }else{

    Session::flash('create_article','Morate da ubacite sliku');
    return redirect()->back();

    }
}




}