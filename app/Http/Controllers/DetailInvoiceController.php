<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\DetailInvoice;
class DetailInvoiceController extends Controller
{
    public function index()
    {
        return view('detail_invoices.index', [
            'detail_invoices' => DetailInvoice::paginate()
        ]);
    }
    public function create()
    {
        $bills =Bill::orderBy('nombre')->get();
        return view('detail_invoices.create', compact('bills'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'cantidad'=>'required|max:255',
            'precio'=>'required|integer',
            'bills_id'=>'required|integer',
        ]);


        DetailInvoice::create($data);

        return back()->with('message', 'detail_invoices created successfully');
    }
    public function edit(DetailInvoice $detail_invoices)
    {
        $bills =Bill::orderBy('nombre')->get();
        return view('detail_invoices.create', compact('bills'));

    }
    public function update(DetailInvoice $detail_invoices, Request $request)
    {
        $data = $request->validate([
            'cantidad'=>'required|max:255',
            'precio'=>'required|integer',
            'bills_id'=>'required|integer',
        ]);

        DetailInvoice::update($data);

        return back()->with('message', 'detail_invoices updated');
    }
    public function destroy(DetailInvoice $detail_invoices)
    {
        $detail_invoices->delete();

        return back()->with('message', 'detail_invoices deleted');
    }
}
