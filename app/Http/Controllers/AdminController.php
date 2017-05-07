<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Numbers;
use Session;
use Image;
use App\Carts;
use App\User;
use App\Images;
use App\Article;
use ArticleRequest;
use File;

use DB;


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
             $id =  Article::all()->last()->id;
           $lastId = $id + 1;
           

            //Create directory for new listing and put uploaded images from array at same dir.
            File::makeDirectory('../public/uploads/article-'.$lastId);
            $img = $request->file('img');


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



            Session::flash('create_article', 'Uspesno ste snimili artikal u bazu');
            return redirect()->back();

    }else{

    Session::flash('create_article','Morate da ubacite sliku');
    return redirect()->back();

    }


}

    public function openOrders()
    {


     $cart = Carts::where('cart_status', 'open')->paginate(10);
        return view('admin.openCart', compact('cart'));
    }

    public function closeOrder($id)
    {
         $id = Carts::findOrFail($id);
         $id->cart_status = 'close';
         $id->save();
         Session::flash('cart','Uspesno zatvorena porudzbina!!!');
         return redirect()->back();
    }

    public function closedOrdersView()
    {
         $cart = Carts::where('cart_status','close')->orderBy('id','desc')->paginate(15);
         return view('admin.closeCarts',compact('cart'));
    }




}