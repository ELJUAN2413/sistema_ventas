<?php

namespace App\Http\Controllers;
use App\Models\Bill;
use App\Models\Detail_Invoice;
use Illuminate\Http\Request;

class DetailInvoiceController extends Controller
{
    public function index()
    {
        return view('detail__invoices.index', [
            'detail__invoices' => Detail_Invoice::paginate()
        ]);
    }
    public function create()
    {
        $bills =Bill::orderBy('nombre')->get();
        return view('detail__invoices.create', compact('bills'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'cantidad'=>'required|max:255',
            'precio'=>'required|integer',
            'bills_id'=>'required|integer',
        ]);


        Detail_Invoice::create($data);

        return back()->with('message', 'detail__invoices created successfully');
    }
    public function edit(Detail_Invoice $detail__invoices)
    {
        $bills =Bill::orderBy('nombre')->get();
        return view('detail__invoices.create', compact('bills'));

    }
    public function update(Detail_Invoice $detail__invoices, Request $request)
    {
        $data = $request->validate([
            'cantidad'=>'required|max:255',
            'precio'=>'required|integer',
            'bills_id'=>'required|integer',
        ]);

        Detail_Invoice::update($data);

        return back()->with('message', 'detail__invoices updated');
    }
    public function destroy(Detail_Invoice $detail__invoices)
    {
        $detail__invoices->delete();

        return back()->with('message', 'detail__invoices deleted');
    }
}

