<div style="margin-bottom: 1em;">
<a href="{{ route('departaments.index') }}">departament List</a>
</div>

<h1>Edit departament</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('departaments.edit', $departament) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter departament" value="{{ $departament->nombre}}">
@error('nombre')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
