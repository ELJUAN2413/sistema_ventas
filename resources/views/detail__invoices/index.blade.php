<div><a href="/">Home</a></div>
<a href="{{ route('detail__invoices.create') }}">New detail__invoices</a>

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
@forelse($detail__invoices as $key => $detail__invoice)
<tr>
<td>{{ $detail__invoices->firstItem() + $key }}.</td>
<td>{{ $detail__invoice->cantidad }}</td>
<td>{{ $detail__invoice->precio }}</td>


<td>{{ $employee->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('detail__invoices.edit', $detail__invoice) }}">Edit</a>

<form Action="{{ route('detail__invoices.delete', $detail__invoice) }}" method="post"
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
