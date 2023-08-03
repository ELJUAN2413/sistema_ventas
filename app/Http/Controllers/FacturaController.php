<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use App\Models\Detallefactura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return view('factura.index',[
            'factura'=> Factura::paginate()
        ]);
    }

    public function create()
    {
        return view('factura.create');
    }

    public function store (request $request)
    {
        $data= $request->validate([
            'fecha'=> 'required|max:255',
            'productos'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'factura_id'=>'required|integer',
        ]);

        Factura::create($data);

        return back()->with('message','factura created successfully');

    }
    public function edit(Factura $factura)
    {
        return view('factura.edit', compact('factura'));
    }
    public function update(Factura $factura, request $request)
    {
        $data = $request->validate([
            'fecha'=> 'required|max:255',
            'productos'=> 'required|max:255',
            'direccion'=> 'required|max:255',
            'factura_id'=>'required|integer',
        ]);
        $factura->update($data);

        return back()->with('message', 'factura update.');
    }
    public function destroy(Factura $factura)
    {
        $factura->delete();

        return back()->with('message', 'factura deleted.');
    }
}
