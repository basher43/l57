<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    public function showCart()
    {
        $data['cart'] = session('cart', []);
        $data['grand_total'] = array_sum(array_column($data['cart'], 'total_price'));
        return view('frontend.layouts.cart', $data);
    }
    public function addToCart(Request $request)
    {

        $product = Product::find($request->product_id);
        $price = $product['price'];
        $cart = session('cart', []);
        if (array_key_exists($request->product_id, $cart)){
            $cart[$request->product_id]['quantity']++;
            $cart[$request->product_id]['total_price'] = $cart[$request->product_id]['quantity'] * $price;

        }else{
            $cart[$request->product_id] = [
                'title'=>$product['title'],
                'price'=>$product['price'],
                'total_price'=>$product['price'],
                'quantity'=>1,
                'product_id'=>$product['id']
            ];
        }

        session(['cart'=> $cart]);
        session()->flash('message', $product->title."has been added to cart.");
        return redirect()->route('frontend.showCart');
    }


    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('frontend.home');
    }

    public function removeCart($id)
    {
      $cart = session('cart', []);
        unset($cart[$id]);
        session(['cart'=>$cart]);
        return redirect()->route('frontend.showCart');
    }


}
