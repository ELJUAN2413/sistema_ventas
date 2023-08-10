<div style="margin-bottom: 1em;">
<a href="{{ route('categories.index') }}">Category List</a>
</div>

<h1>Create Category</h1>
@if(session('message'))
<div style="color: gree;">{{ session('message') }}</div>
@endif
<form action="{{ route('categories.create') }}" method="post">
@csrf
<div style="margint-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter category">
@error('nombre')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom:: 1em;">
<label for="departament">Description</label>
<input type="text" name="description" id="description" placeholder="Enter description">
@error('description')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
