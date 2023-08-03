<?php

namespace App\Http\Controllers;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        return view('pais.index',[
            'pais'=> Pais::paginate()
        ]);
    }

    public function create()
    {
        return view('pais.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'pais'=> 'required|max:255',
        ]);

        Pais::create($data);

        return back()->with('message','pais created successfully');

    }
    public function edit(Pais $pais)
    {
        return view('pais.edit', compact('pais'));
    }
    public function update(Pais $pais, request $request)
    {
        $data = $request->validate([
            'fecha'=> 'required|max:255',
        ]);
        $pais->update($data);

        return back()->with('message', 'pais update.');
    }
    public function destroy(Pais $pais)
    {
        $pais->delete();

        return back()->with('message', 'pais deleted.');
    }
}
