<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::paginate()
        ]);
    }
    public function create()
    {
        $cities = City::orderBy('nombre')->get();
        return view('clients.create', compact('cities'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'cities_id'=>'required|integer',
            'cedula'=>'required|integer',
            'correo'=>'required|string',
            'telefono'=>'required|integer',
            'direccion'=>'required|string',
        ]);


        Client::create($data);

        return back()->with('message', 'Client created successfully');
    }
    public function edit(Client $client)
    {
        $cities = City::orderBy('nombre','cedula','correo','telefono','direccion')->get();
        return view('clients.edit', compact('cities'));
    }
    public function update(Client $client, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'cities_id'=>'required|integer',
            'cedula'=>'required|integer',
            'correo'=>'required|string',
            'telefono'=>'required|integer',
            'direccion'=>'required|strign',
        ]);

        Client::update($data);

        return back()->with('message', 'Client updated');
    }
    public function destroy(Client $client)
    {
        $client->delete();

        return back()->with('message', 'Client deleted');
    }
}
