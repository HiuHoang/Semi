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
    public function getInsertProduct()
    {
        return view('admin.add-product');
    }
    public function postEditProduct(Request $request)
    {
        if ($request->isMethod('POST')) {

            if ($request->hasFile('images')) {
                $file = $request->file('images');
                // $path = $request->file('images')->store('images/products');
                $path = public_path('home/img');
                $filepicture = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filepicture);
            }
            $product = new Product;
            // $product->productid = $request->productid;
            $product->productname = $request->productname;
            $product->images = $filepicture;
            $product->price = $request->price;
            $product->color = $request->color;
            $product->images = $filepicture;
            $product->description = $request->description;
            $product->origin = $request->origin;
            $product->type_id = $request->type_id;
            $product->save();
            return redirect()->route('product')->with('success', 'Product has been added');
        }
    }
}
