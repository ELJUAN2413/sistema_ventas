<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Departament;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('cities.index', [
            'cities' => City::paginate()
        ]);
    }
    public function create()
    {
        $departaments = Departament::orderBy('nombre')->get();
        return view('cities.create', compact('departaments'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'departament_id'=>'required|integer',
        ]);


        City::create($data);

        return back()->with('message', 'City created successfully');
    }
    public function edit(City $city)
    {
        $departaments = Departament::orderby('nombre')->get();
        return view('cities.edit', compact('city','departaments'));
    }
    public function update(City $city, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'departament_id'=>'required|integer',
        ]);

        City::update($data);

        return back()->with('message', 'City updated');
    }
    public function destroy(City $city)
    {
        $city->delete();

        return back()->with('message', 'City deleted');
    }
}
