<?php

namespace App\Http\Controllers;
use App\Models\Proveedores;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        return view('proveedores.index',[
            'proveedores'=> Proveedores::paginate()
        ]);
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'nombre'=> 'required|max:255',
            'telefono'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'correo'=> 'required|max:255',
        ]);

        Proveedores::create($data);

        return back()->with('message','proveedores created successfully');

    }
    public function edit(Proveedores $proveedores)
    {
        return view('proveedores.edit', compact('proveedores'));
    }
    public function update(Proveedores $proveedores, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max::255',
            'telefono'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'correo'=> 'required|max:255',
        ]);
        $proveedores->update($data);

        return back()->with('message', 'proveedores update.');
    }
    public function destroy(Proveedores $proveedores)
    {
        $proveedores->delete();

        return back()->with('message', 'proveedores deleted.');
    }
}



