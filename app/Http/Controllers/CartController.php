<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Products;
use App\Customer;
use App\Bills;
use App\BillDetail;
use Validator;
class CartController extends Controller
{
    public function cart(){
        $carts = Cart::content();
        return view('front.pages.cart',compact(['carts']));
    }

    public function cartCreate($productId){
        $product = Products::find($productId);
        Cart::add($product, $product->title, 1, $product->price,['image' => $product->image,'productID' => $product->id]);
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
        $carts = Cart::content();
        return view('front.pages.bills',compact(['carts']));
    }

    public function updateBills(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:120',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'gender' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/bills')
                    ->withErrors($validator)
                    ->withInput();
        }
        if(!empty($request->all())){
            $sche = new Customer;
            if(!empty($sche)){
                $sche->name = $request->name;
                $sche->email = $request->email;
                $sche->address = $request->address;
                $sche->phone = $request->phone;
                $sche->gender = $request->gender;
                $sche->save();
                if(!empty($sche->id)){
                    $bill = new Bills();
                    $bill->id_customer = $sche->id;
                    $bill->date_order = date('Y-m-d H:i:s');
                    $bill->total = Cart::count();
                    $bill->payment = Cart::subtotal();
                    $bill->save();
                    if(!empty($bill->id)){
                        $carts = Cart::content();
                        foreach ($carts as $cart) {
                            $billDetail = new BillDetail();
                            $billDetail->id_bill = $bill->id;
                            $billDetail->id_product = $cart->options->productID;
                            $billDetail->quantity = $cart->qty;
                            $billDetail->unit_price = $cart->subtotal;
                            $billDetail->save();
                            Cart::destroy();
                        }
                    }
                }else{
                    $bill = Bills::create([
                        'id_customer' => $sche->id,
                        'date_order' => date('Y-m-d H:i:s'),
                        'total' => Cart::count(),
                        'payment' => Cart::subtotal(),
                    ]);
                }
            }else{
                $sche = Customer::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'address' => $request->get('address'),
                    'phone' => $request->get('phone'),
                    'gender' => $request->get('gender'),
                ]);
            }
        }
        return redirect('/bills');
    }
}
