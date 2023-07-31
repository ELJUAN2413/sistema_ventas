<?php

namespace App\Http\Controllers;
use illuminate\http\request;
use app\models\category;
use app\Models\Product;



class ProductController extends Controller
{
    public function index()
    {
        return view('Products.index',[
            'Product'=> Product::paginate()
        ]);
    }
    public function create()
    {
        $categories = category::orderby('name')->get();
        return view('products.create', compact('categories'));
    }
    public function store(request $request)
    {
        $data = $request->validate([
            'name' => "required|max:255",
            'price' => 'required|regex/^\d{1,13}(\d{1,4})?$\|gt:0',
            'category_id ' => 'required|integer',
        ]);

        product::create($data);

        return back()->with('message', 'product created.');
    }
    public function edit(Product $product)
    {
        $categories = category::orderby('name')->get();
        return view('products.edit', compact('product'));
    }
    public function update (product $product, request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex/^\d{1,13}(\d{1,4})?$\|gt:0',
            'category_id' => 'required|integer',
        ]);

        Product::create($data);

        return back->with('mesage', 'product created.');


        return back()->with('message', 'product updated.');
    }
    public function destroy(product $product)
    {
        $product->delete();

        return back()->with('message', 'product deleted.');
    }
}
