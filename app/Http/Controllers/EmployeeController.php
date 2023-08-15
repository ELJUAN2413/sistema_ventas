<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Departament;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::paginate()
        ]);
    }
    public function create()
    {
        $cities =City::orderBy('nombre')->get();
        return view('employees.create', compact('cities'));

        $departaments =Departament::orderBy('nombre')->get();
        return view('employees.create', compact('departaments'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'cities_id'=>'required|integer',
            'departament_id'=>'required|integer',
            'nombre'=>'required|max:255',
            'apellido'=>'required|max:255',
            'cedula'=>'required|integer',
            'correo'=>'required|max:255',
            'telefono'=>'required|integer',
            'direccion'=>'required|max:255',
            'cargo'=>'required|max:255',
        ]);


        Employee::create($data);

        return back()->with('message', 'Employee created successfully');
    }
    public function edit(Employee $employees)
    {
        $cities =City::orderBy('nombre')->get();
        return view('employees.create', compact('cities'));

        $departaments =Departament::orderBy('nombre')->get();
        return view('employees.create', compact('departaments'));
    }
    public function update(Employee $employees, Request $request)
    {
        $data = $request->validate([
            'cities_id'=>'required|integer',
            'departament_id'=>'required|integer',
            'nombre'=>'required|max:255',
            'apellido'=>'required|max:255',
            'cedula'=>'required|integer',
            'correo'=>'required|max:255',
            'telefono'=>'required|integer',
            'direccion'=>'required|max:255',
            'cargo'=>'required|max:255',
        ]);

        Employee::update($data);

        return back()->with('message', 'employee updated');
    }
    public function destroy(Employee $employees)
    {
        $employees->delete();

        return back()->with('message', 'employees deleted');
    }
}

