<div><a href="/">Home</a></div>
<a href="{{ route('clients.create') }}">New client</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>cedula</td>
<td>correo</td>
<td>telefono</td>
<td>direccion</td>
<td>cities</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($clients as $key => $client)
<tr>
<td>{{ $clients->firstItem() + $key }}.</td>
<td>{{ $client->nombre }}</td>
<td>{{ $client->cedula }}</td>
<td>{{ $client->correo }}</td>
<td>{{ $client->telefono }}</td>
<td>{{ $client->direccion }}</td>

<td>{{ $client->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('clients.edit', $client) }}">Edit</a>

<form Action="{{ route('clients.delete', $client) }}" method="post"
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
