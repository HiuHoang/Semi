<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        $product = Product::paginate(10);
        return view('admin.listproduct', compact("product"));
    }
    public function deleteProduct($id)
    {
        $product = DB::table('products')->where('product_id', '=', $id);
        $product->delete();
        return back();
    }
    public function getEditProduct($product_id)
    {
        $data['product'] = Product::find($product_id);
        return view('admin.edit-product', $data);
    }
    public function postEditProduct(Request $request, $product_id)
    {
        if ($request->hasFile('productimage')) {
            $file = $request->file('productimage');
            $path = public_path('/images/products');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $product = Product::find($product_id);
        $product->productname = $request->productname;
        $product->productimage = $filename;
        $product->price = $request->price;
        $product->productdescription = $request->productdescription;
        $product->colour = $request->colour;
        $product->origin = $request->origin;
        $product->save();
        return redirect()->route('manageProduct');
    }
    public function getInsertProduct()
    {
        return view('admin.add-product');
    }
    public function postInsertProduct(Request $request)
    {
        if ($request->isMethod('POST')) {

            if ($request->hasFile('productimage')) {
                $file = $request->file('productimage');
                $path = public_path('/images/products');
                $filename = $file->getClientOriginalName();
                $file->move($path, $filename);
            }
            $product = new Product;
            $product->productname = $request->productname;
            $product->productimage = $filename;
            $product->price = $request->price;
            $product->colour = $request->colour;
            $product->productdescription = $request->productdescription;
            $product->origin = $request->origin;
            $product->size = $request->size;
            // $product->category_id = $request->category_id;
            $product->save();
            return redirect()->route('manageProduct')->with('success', 'Product has been added');
        }
    }
    public function gethome()
    {
        $product = DB::table('products')->get();
        //dd($product);
        return view('user.home', ['product' => $product]);
    }
}
