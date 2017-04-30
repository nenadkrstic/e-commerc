<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Article;
use Auth;
use App\Carts;
use App\Numbers;
use Session;


class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $number = $request->only('number');

        $articles = Article::findOrFail($productId);


        Cart::add($productId, $articles->id, 1, $articles->price, ['desc' => $articles['description'], 'size' => $number['number']]);

        return redirect()->back();

    }

    public function cartContent()
    {
        $cartContent = Cart::content();

        return view('cart.cartContent', compact('cartContent'));

    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect()->back();
    }

    public function singleDelete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function makeOrder()
    {


//return Cart::content();

        foreach (Cart::content() as $cart)
            {


              $cartBay['user_id'] = Auth::user()->id;
                $cartBay['articles_id'] = (int)$cart->id;
                $cartBay['size'] = $cart->options->size;
                $cartBay['cart_status'] = 'open';
                $cartBay['price'] = $cart->price;
                Carts::create($cartBay);

                

            }

        Cart::destroy();
        Session::flash('cart','Uspešno ste kupili artikal, uskoro đe vam se javiti naš operate zbog potvrde porudzbine, hvala!!!');
return redirect('/');



    }


}
