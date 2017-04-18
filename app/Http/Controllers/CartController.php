<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Article;

class CartController extends Controller
{
   public function addToCart($productId)
   {
       $articles = Article::findOrFail($productId);

       Cart::add($productId,$articles->name,1, $articles->price);
       return redirect()->back();

   }

    public function cartContent()
    {
        $cartContent = Cart::content();
        return view('cart.cartContent',compact('cartContent'));

    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect()->back();
    }
}
