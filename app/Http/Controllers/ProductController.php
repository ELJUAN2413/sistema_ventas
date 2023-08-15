<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate()
        ]);
    }
    public function create()
    {
        $categories =Category::orderBy('nombre')->get();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'category_id'=>'required|integer',
            'precio'=>'required|integer',
        ]);


        Product::create($data);

        return back()->with('message', 'product created successfully');
    }
    public function edit(Product $product)
    {
        $categories = Category::orderBy('nombre','precio')->get();
        return view('products.edit', compact('categories'));
    }
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'category_id'=>'required|integer',
            'precio'=>'required|integer',
        ]);

        Product::update($data);

        return back()->with('message', 'Client updated');
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('message', 'product deleted');
    }
}
