<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
        public function index()
        {
            return view('productos.index',[
                'productos'=> Productos::paginate()
            ]);
        }

        public function create()
        {
            return view('productos.create');
        }

        public function store (request $request)
        {
            $data= $request->validate([
                'name'=> 'required|max:255',
                'precio'=> 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
                'category_id' => 'required|integer',
            ]);

            Productos::create($data);

            return back()->with('message','productos created successfully');

        }
        public function edit(Productos $productos)
        {
            return view('productos.edit', compact('productos'));
        }
        public function update(Productos $productos, request $request)
        {
            $data = $request->validate([
                'nombre'=> 'required|max::255',
                'precio'=> 'required|max:255',
                'category_id' => 'required|integer',
            ]);
            $productos->update($data);

            return back()->with('message', 'productos update.');
        }
        public function destroy(Productos $productos)
        {
            $productos->delete();

            return back()->with('message', 'productos deleted.');
        }
    }



