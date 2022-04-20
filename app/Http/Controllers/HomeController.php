<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function gethome()
    {
        $product = Product::all();
        return view('user.home', compact('product'));
    }
    public function getshop()
    {
        $product = Product::all();
        return view('user.shop', compact('product'));
    }
    public function getshopdetail($product_id)
    {
        $product = Product::find($product_id);
        return view('user.shop-details', compact('product'));
    }
    public function getblog()
    {
        //$product = Product::all();
        return view('user.blog');
    }
    public function getcontact()
    {
        //$product = Product::all();
        return view('user.contact');
    }
    public function getcart()
    {
        $product = Product::all();
        return view('user.shopping-cart');
    }
    public function gettocart(Request $request)
    {
        $data = new Cart;
        $data->user_id = Auth()->user()->user_id;
        $data->product_id = $request->product_id;
        $data->save();
        return redirect()->back();
    }
    public function getAllCart()
    {
        $cart = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.product_id')
            ->join('users', 'cart.user_id', '=', 'users.user_id')
            ->select('cart.*', 'products.productname', 'products.productimage', 'products.price')
            ->where('users.user_id', '=', Auth()->user()->user_id)
            ->get();
        // $total = 0;
        // foreach ($cart as $key => $value) {
        //     $total += ($value->price * $value->quantity);
        // }
        return view('user.shopping-cart', compact('cart'));
    }
    public function DeleteCart($cart_id)
    {
        $data = Cart::find($cart_id);
        $data->delete();
        return back();
    }
}
