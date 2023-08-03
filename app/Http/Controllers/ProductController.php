<?php

namespace App\Http\Controllers;
use illuminate\http\request;
use App\Models\Product;
use App\Models\Category;



class ProductController extends Controller
{
    public function index()
    {
        return view('product.index',[
            'product'=> Product::paginate()
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'name'=> 'required|max:255',
            'price'=> 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
        ]);

        Product::create($data);

        return back()->with('message','product created successfully');

    }
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }
    public function update(Product $product, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max::255',
            'price'=> 'required|max:255',
            'category_id' => 'required|integer',
        ]);
        $product->update($data);

        return back()->with('message', 'product update.');
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('message', 'product deleted.');
    }
}

