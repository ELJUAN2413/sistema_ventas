<div style="margin-bottom: 1em;">
<a href="{{ route('departaments.index') }}">departament List</a>
</div>

<h1>Create departament</h1>
@if(session('message'))
<div style="color: gree;">{{ session('message') }}</div>
@endif
<form action="{{ route('departaments.create') }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter category">
@error('nombre')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
