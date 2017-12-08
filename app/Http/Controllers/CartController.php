<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Products;
class CartController extends Controller
{
    public function cart(){
        $carts = Cart::content();
        return view('front.pages.cart',compact(['carts']));
    }

    public function cartCreate($productId){
        $product = Products::find($productId);
        Cart::add($product, $product->title, 1, $product->price,['image' => $product->image]);
        return redirect('/cart');
    }

    public function cartEdit($rowId,Request $request){
        Cart::update($rowId, $request->quantity);
        return redirect('/cart');
    }

    public function cartRemove($rowId){
        Cart::remove($rowId);
        return redirect('/cart');
    }

    public function bills(){
        
        return view('front.pages.bills');
    }
}
