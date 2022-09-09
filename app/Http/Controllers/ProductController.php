<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->unit = $request->input('unit');
        $product->price = $request->input('price');

        $product->save();

        return response()->json($product->id);
    }
    
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find(1);
 
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->unit = $request->input('unit');
        $product->price = $request->input('price');

        $product->save();

        return response()->json($product->id);
    }

    public function delete($id)
    {
        Product::destroy(1);

        return response()->json($id);
    }
}
