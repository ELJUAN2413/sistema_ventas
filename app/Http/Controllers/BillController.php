<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index', [
            'bills' => Bill::paginate()
        ]);
    }
    public function create()
    {
        $employees =Employee::orderBy('nombre')->get();
        return view('bills.create', compact('employees'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'employees_id'=>'required|integer',
            'precio'=>'required|integer',
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'productos' => 'required|max:255',
            'fecha' => 'required|max:255',

        ]);

        Bill::create($data);

        return back()->with('message', 'bills created successfully');
    }
    public function edit(Bill $bills)
    {
        $employees =Employee::orderBy('nombre')->get();
        return view('bills.create', compact('employees'));
    }
    public function update(Bill $bills, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'employees_id'=>'required|integer',
            'precio'=>'required|integer',
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'productos' => 'required|max:255',
            'fecha' => 'required|max:255',
        ]);

        Bill::update($data);

        return back()->with('message', 'bills updated');
    }
    public function destroy(Bill $bills)
    {
        $bills->delete();

        return back()->with('message', 'bills deleted');
    }
}
