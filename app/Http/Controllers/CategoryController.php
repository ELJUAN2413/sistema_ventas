<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index',[
            'categories'=> category::paginate()
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required|mas:255'
        ]);

        category::create($data);

        return back()->with('message','category created successfully');

    }
    public function edit(category $category)
    {
        return view('categories.edit', compact('categories'));
    }
    public function update(category $category, request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max::255',
            'description'=>'required|mas::255'
        ]);
        $category->update($data);

        return back()->with('message', 'category update.');
    }
    public function destroy(category $category)
    {
        $category->delete();

        return back()->with('message', 'category deleted.');
    }
}

