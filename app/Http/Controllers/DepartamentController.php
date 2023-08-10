<?php

namespace App\Http\Controllers;
use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    public function index()
    {
        return view('departaments.index', [
            'departaments' => Departament::paginate()
        ]);
    }
    public function create()
    {
        return view('departaments.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        Departament::create($data);

        return back()->with('message', 'departament created successfully');
    }
    public function edit(Departament $departament)
    {
        return view('departaments.edit', compact('departament'));
    }
    public function update(Departament $departament, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $departament->update($data);

        return back()->with('message', 'departament updated');
    }
    public function destroy(Departament $departament)
    {
        $departament->delete();

        return back()->with('message', 'departament deleted');
    }
}
