<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function show() {
        return view('productForm');
    }
    public function showSample() {
        return view('product_sample');
    }

    public function store(Request $request) {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        if($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $product->product_image = $filename;
        }

        $product->save();
        return redirect('/products');
    }
}
