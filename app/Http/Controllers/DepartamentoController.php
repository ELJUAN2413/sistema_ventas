<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('departamento.index',[
            'departamentos'=> Departamento::paginate()
        ]);
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'nombre'=> 'required|max:255',
            'pais_id'=>'required|integer',
        ]);

        Departamento::create($data);

        return back()->with('message','departamentos created successfully');

    }
    public function edit(Departamento $departamentos)
    {
        return view('departamentos.edit', compact('departamentos'));
    }
    public function update(Departamento $departamentos, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max::255',
            'pais_id'=>'required|integer',
        ]);
        $departamentos->update($data);

        return back()->with('message', 'ciudad update.');
    }
    public function destroy(Departamento $departamentos)
    {
        $departamentos->delete();

        return back()->with('message', 'ciudad deleted.');
    }
}
