<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::paginate()
        ]);
    }
    public function create()
    {
        $cities =City::orderBy('nombre')->get();
        return view('customers.create', compact('cities'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'=>'required|max:255',
            'apellido'=>'required|max:255',
            'cedula'=>'required|integer',
            'correo'=>'required|max:255',
            'telefono'=>'required|integer',
            'direccion'=>'required|max:255',
            'cargo'=>'required|max:255',
            'cities_id'=>'required|integer',
        ]);


        Customer::create($data);

        return back()->with('message', 'customer created successfully');
    }
    public function edit(customer $customers)
    {
        $cities =City::orderBy('nombre')->get();
        return view('customers.edit', compact('cities'));

    }
    public function update(customer $customers, Request $request)
    {
        $data = $request->validate([
            'nombre'=>'required|max:255',
            'apellido'=>'required|max:255',
            'cedula'=>'required|integer',
            'correo'=>'required|max:255',
            'telefono'=>'required|integer',
            'direccion'=>'required|max:255',
            'cargo'=>'required|max:255',
            'cities_id'=>'required|integer',
        ]);

        Customer::update($data);

        return back()->with('message', 'customer updated');
    }
    public function destroy(customer $customers)
    {
        $customers->delete();

        return back()->with('message', 'customer deleted');
    }
}

