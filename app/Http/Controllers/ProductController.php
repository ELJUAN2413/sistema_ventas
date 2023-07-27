<?php

namespace App\Http\Controllers;

use app\models\category;
use app\models\product;


class ProductController extends Controller
{
    public functionindex()
    {
        return view('products.index',[
            'products'-> product::paginate(10)
        ]);
    }
    public function create()
    {
        $categories = category::orderby('name')->get();
        return view('products.create', compact('categories'));
    }
    public function store(request $request)
    {
        $date = request->validate([
            'name'->'required|max:255',
            'price'->'required|regex/^\d{1,13}(\d{1,4})?$\|gt:0',
            'category_id'->'required|integer',
        ]);

        product::create($data);

        return back()->with('message', 'product created.');
    }
    public function edit(product $product)
    {
        $categories = category::orderby('name')->get();
        return view('produucts.edit', compact('product'));
    }
    public function update(product $product, request $request)
    {
        $data =$request->validate([
        'name'->'required|max:255',
        'price'->'required|regex/^\d{1,13}(\d{1,4})?$\|gt:0',
        'category_id'->'required|integer',
        ]);

        product::create($data);

        return back->with('mesage','product created.');
    }
    public function edit(product $product)
    {
        $categories = category::orderby('name')->get();
        return view('products.edit', compact('product','categories'));
    }
    public function upndate(product $product, request $request)
    {
        $date = request->validate([
            'name'->'required|max:255',
            'price'->'required|regex/^\d{1,13}(\d{1,4})?$\|gt:0',
            'category_id'->'required|integer',
        ]);
        $product->update($data);

        return back()->with('message','product updated.');
    }
    public function destroy(product $product)
    {
        $product->delete();

        return back()->with('message','product deleted.');
    }
}
