<div><a href="/">Home</a></div>
<a href="{{ route('detail_invoices.create') }}">New detail__invoices</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>cantidad</td>
<td>precio</td>
<td>bills</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($detail_invoices as $key => $detail_invoice)
<tr>
<td>{{ $detail_invoices->firstItem() + $key }}.</td>
<td>{{ $detail_invoice->cantidad }}</td>
<td>{{ $detail_invoice->precio }}</td>


<td>{{ $detail_invoice->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('detail_invoices.edit', $detail_invoice) }}">Edit</a>

<form Action="{{ route('detail_invoices.delete', $detail_invoice) }}" method="post">
@csrf
<button type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="5">No data found in table </td>
</tr>
@endforelse
</tbody>
</table>
