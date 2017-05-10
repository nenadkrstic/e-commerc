<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Article;
use Auth;
use App\Carts;
use App\Numbers;
use Session;
use DB;


class CartController extends Controller
{
    /*
     * insert article at cart
     *
     */
    public function addToCart(Request $request, $productId)
    {
        $number = $request->only('number');
        $articles = Article::findOrFail($productId);
        Cart::add($productId, $articles->id, 1, $articles->price, ['desc' => $articles['description'], 'size' => $number['number']]);
        return redirect('/');

    }

    public function cartContent()
    {
        $cartContent = Cart::content();
        return view('cart.cartContent', compact('cartContent'));

    }
    /*
     * cart destroy
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect()->back();
    }
    /*
     * delete single  article
     */
    public function singleDelete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function makeOrder()
    {
        Cart::content();
        /*
         * Insert bay article into cart table width status open cart
         *
         */
        //return Cart::Content();

       foreach (Cart::content() as $cart)
       {
                /*
                 * Create cart for chosen articles
                 *
                 */
             $cartBay['user_id'] = Auth::user()->id;
             $cartBay['articles_id'] = (int)$cart->id;
             $cartBay['article_number'] = $cart->options->size;
             $cartBay['cart_status'] = 'open';
             $cartBay['price'] = $cart->price;
             Carts::create($cartBay);
             /*
             * Delete size for curent article
             *
             */
             DB::delete("DELETE FROM numbers where 
             article_id ={$cartBay['articles_id']} and size = {$cartBay['article_number']} limit 1");
       }


       Cart::destroy();
       Session::flash('cartMsg','Uspešno ste kupili artikal, uskoro đe vam se javiti naš operater zbog potvrde porudzbine, hvala!!!');
       return redirect('/');



    }


}
