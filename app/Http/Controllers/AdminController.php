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

    /*
     *insert numbers for curent article
     *
     */
    public function articleNumber($numbers, $lastId)
    {
        /*
         * Create numbers for already inserted article at table numbers width foreign key on articles id
         *
         */
        $numbers = explode(',', $numbers);
        foreach ($numbers as $number)
        {
            $numberArt['article_id'] = $lastId;
            $numberArt['size'] = $number;
            Numbers::create($numberArt);
        }

    }

    /*
     * Save image to upload directory
     */

    public function imageCreate($img, $lastId)
    {
        /*
         *  Create numbers for already inserted article at table numbers width foreign key on articles id
         *
        */

        $count = 0;
        foreach ($img as $i)
        {
            $count++;
            // save multiple images in file
            $file = '.' . $i->getClientOriginalExtension();
            Image::make($i)->resize('300', '300')->save('../public/uploads/article-'.$lastId.'/img'.$count.''.$file);

            $image['article_id'] = $lastId;
            $image['image'] = 'img'.$count.''.$file;

            Images::create($image);
        }

    }

    /*
     *create article
     *
     */

    public function saveArticle(Request $request)
    {

    //  return $art = $request->all();

        if ($request->hasFile('img')) {
             //Get last insert article ID
             $id =  Article::all()->last()->id;
             $lastId = $id + 1;
           

             //Create directory for new listing and put uploaded images from array at same dir.
             File::makeDirectory('../public/uploads/article-'.$lastId);
             $img = $request->file('img');



             // Create Articles

             $art = $request->all();
             Article::create($art);

             $numbers = $request->number;

              //Call articleMethod and explode string, insert numbers for article at table numbers width foreign key on articles id
             $this->articleNumber($numbers,$lastId);


               //call imageCreate method for insert image at directoy
             $this->imageCreate($img, $lastId);



              Session::flash('create_article', 'Uspesno ste snimili artikal u bazu');
             return redirect()->back();

        }else{

        Session::flash('create_article','Morate da ubacite sliku');
        return redirect()->back();

        }


}
    /*
     * admin panel with open orders and waiting from admin to close orders
     *
     */

    public function openOrders()
    {
        $cart = Carts::where('cart_status', 'open')->paginate(15);
        return view('admin.openCart', compact('cart'));
    }
    /*
     * close orders
     *
     */

    public function closeOrder($id)
    {
         $id = Carts::findOrFail($id);
         $id->cart_status = 'close';
         $id->save();
         Session::flash('cart','Uspesno zatvorena porudzbina!!!');
         return redirect()->back();
    }

    /*
     * admin panel with open closed orders
     *
     */

    public function closedOrdersView()
    {
         $cart = Carts::where('cart_status','close')->orderBy('id','desc')->paginate(15);
         return view('admin.closeCarts',compact('cart'));
    }

    public function searchArticles(Request $request)
    {
       return view('admin.searchArticles');
    }

    public function searchArticlesAjax(Request $request)
    {
        if($request->ajax())
        {
            $code = $request->input('code');
            $articles = Article::where('article_code', $code)->get();
            return json_encode($articles);
        }
    }

    /*
     * admin search article with article_code
     *
     */

    public function searchArticlesCode(Request $request)
    {
        $code = $request->input('search');
       $data = Article::with('articleImage')->where('article_code', $code)->first();
        return view('admin.singleArticleCode', compact('data'));

    }




}