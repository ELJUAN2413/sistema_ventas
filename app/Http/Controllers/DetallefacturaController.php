<?php

namespace App\Http\Controllers;
use App\Models\Detallefactura;
use App\Models\Factura;
use Illuminate\Http\Request;

class DetallefacturaController extends Controller
{
    public function index()
    {
        return view('detallefactura.index',[
            'detallefactura'=> Detallefactura::paginate()
        ]);
    }

    public function create()
    {
        return view('detallefactura.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'cantidad'=> 'required|max:255',
            'precio'=> 'required|max:255',
            'factura_id'=>'required|integer',
        ]);

        Detallefactura::create($data);

        return back()->with('message','detallefactura created successfully');

    }
    public function edit(Detallefactura $detallefactura)
    {
        return view('detallefactura.edit', compact('detallefactura'));
    }
    public function update(Detallefactura $detallefactura, request $request)
    {
        $data = $request->validate([
            'cantidad'=> 'required|max::255',
            'precio'=> 'required|max:255',
            'factura_id'=>'required|integer',
        ]);
        $detallefactura->update($data);

        return back()->with('message', 'detallefactura update.');
    }
    public function destroy(Detallefactura $detallefactura)
    {
        $detallefactura->delete();

        return back()->with('message', 'detallefactura deleted.');
    }
}
