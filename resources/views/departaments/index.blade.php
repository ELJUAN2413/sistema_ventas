<div><a href="/">Home</a></div>
<a href="{{ route('departaments.create') }}">New departament</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($departaments as $key => $departament)
<tr>
<td>{{ $departaments->firstItem() + $key }}.</td>
<td>{{ $departament->nombre }}</td>
<td>{{ $departament->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('departaments.edit', $departament) }}">Edit</a>

<form Action="{{ route('departaments.delete', $departament) }}" method="post"
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
