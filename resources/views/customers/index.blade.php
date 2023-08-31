<div><a href="/">Home</a></div>
<a href="{{ route('customers.create') }}">New customers</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>apellido</td>
<td>cedula</td>
<td>correo</td>
<td>telefono</td>
<td>direccion</td>
<td>cargo</td>
<td>city</td>
<td>departament</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($customers as $key => $customer)
<tr>
<td>{{ $customers->firstItem() + $key }}.</td>
<td>{{ $customer->nombre }}</td>
<td>{{ $customer->apellido }}</td>
<td>{{ $customer->cedula }}</td>
<td>{{ $customer->correo }}</td>
<td>{{ $customer->telefono }}</td>
<td>{{ $customer->direccion }}</td>
<td>{{ $customer->cargo }}</td>



<td>{{ $customer->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('customers.edit', $customer) }}">Edit</a>

<form Action="{{ route('customers.delete', $customer) }}" method="post">
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
