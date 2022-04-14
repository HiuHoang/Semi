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
        //$product = Product::all();
        return view('user.shopping-cart');
    }
    public function gettocart(Request $request)
    {
        $data = new Cart;
        $data->username = Auth()->user()->username;
        $data->product = $request->productid;
        $data->quantity = $value ?? '1';
        $data->size = $request->size;
        $data->save();
        $alertadd = 'Add to cart successfully!';
        return back()->with('alertadd', $alertadd);
    }
    public function getAllCart()
    {
        $cart = DB::table('cart')
            ->join('products', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->select('cart.*', 'product.*', 'size.size', 'users.username')
            ->where('cart.username', Auth()->user()->username)
            ->get();
        // return view('cart', ['cart' => $cart, 'total' => $total]);
    }
}
