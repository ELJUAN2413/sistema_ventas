<?php

namespace App\Http\Controllers;
use App\Models\Empleados;
use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        return view('empleados.index',[
            'empleados'=> Empleados::paginate()
        ]);
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'nombre'=> 'required|max:255',
            'apellido'=> 'required|max:255',
            'cedula'=> 'required|max:255',
            'correo'=> 'required|max:255',
            'telefono'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'cargo'=> 'required|max:255',
            'pais_id'=>'required|integer',
        ]);

        Empleados::create($data);

        return back()->with('message','empleados created successfully');

    }
    public function edit(Empleados $empleados)
    {
        return view('empleados.edit', compact('empleados'));
    }
    public function update(Empleados $empleados, request $request)
    {
        $data = $request->validate([
            'nombre'=> 'required|max:255',
            'apellido'=> 'required|max:255',
            'cedula'=> 'required|max:255',
            'correo'=> 'required|max:255',
            'telefono'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'cargo'=> 'required|max:255',
            'ciudad_id'=>'required|integer',
            'pais_id'=>'required|integer',
            'departamento_id'=>'required|integer',
        ]);
        $empleados->update($data);

        return back()->with('message', 'empleados update.');
    }
    public function destroy(Empleados $empleados)
    {
        $empleados->delete();

        return back()->with('message', 'empleados deleted.');
    }
}
