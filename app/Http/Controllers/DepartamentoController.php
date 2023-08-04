<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('departamentos.index',[
            'departamentos'=> departamento::paginate()
        ]);
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'nombre'=> 'required|max:255',
            'pais_id'=>'required|integer',
        ]);

        departamento::create($data);

        return back()->with('message','departamento created successfully');

    }
    public function edit(departamento $departamentos)
    {
        return view('departamentos.edit', compact('departamento'));
    }
    public function update(Departamento $departamento, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max::255',
            'pais_id'=>'required|integer',
        ]);
        $departamento->update($data);

        return back()->with('message', 'departamento update.');
    }
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return back()->with('message', 'departamento deleted.');
    }
}
