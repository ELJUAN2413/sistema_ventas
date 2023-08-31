<div><a href="/">Home</a></div>
<a href="{{ route('employees.create') }}">New employee</a>

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
@forelse($employees as $key => $employee)
<tr>
<td>{{ $employees->firstItem() + $key }}.</td>
<td>{{ $employee->nombre }}</td>
<td>{{ $employee->apellido }}</td>
<td>{{ $employee->cedula }}</td>
<td>{{ $employee->correo }}</td>
<td>{{ $employee->telefono }}</td>
<td>{{ $employee->direccion }}</td>
<td>{{ $employee->cargo }}</td>



<td>{{ $employee->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('employees.edit', $employee) }}">Edit</a>

<form Action="{{ route('employees.delete', $employee) }}" method="post">
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
