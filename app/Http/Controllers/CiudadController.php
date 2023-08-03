<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        return view('ciudad.index',[
            'ciudad'=> Ciudad::paginate()
        ]);
    }

    public function create()
    {
        return view('ciudad.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'nombre'=> 'required|max:255',
            'departamento_id'=>'required|integer',
        ]);

        ciudad::create($data);

        return back()->with('message','ciudad created successfully');

    }
    public function edit(ciudad $ciudad)
    {
        return view('ciudad.edit', compact('ciudad'));
    }
    public function update(ciudad $ciudad, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max::255',
            'departamento_id'=>'required|integer',
        ]);
        $ciudad->update($data);

        return back()->with('message', 'ciudad update.');
    }
    public function destroy(ciudad $ciudad)
    {
        $ciudad->delete();

        return back()->with('message', 'ciudad deleted.');
    }
}


