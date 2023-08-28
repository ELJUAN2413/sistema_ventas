<div><a href="/">Home</a></div>
<a href="{{ route('bills.create') }}">New bills</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>apellido</td>
<td>fecha</td>
<td>productos</td>
<td>precio</td>
<td>employee</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($bills as $key => $bill)
<tr>
<td>{{ $bills->firstItem() + $key }}.</td>
<td>{{ $bill->nombre }}</td>
<td>{{ $bill->apellido }}</td>
<td>{{ $bill->fecha }}</td>
<td>{{ $bill->productos }}</td>
<td>{{ $bill->precio}}</td>




<td>{{ $bill->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('bills.edit', $bill) }}">Edit</a>

<form Action="{{ route('bills.delete', $bill) }}" method="post"
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
