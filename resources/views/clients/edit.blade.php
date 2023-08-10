<div style="margin-bottom: 1em;">
<a href="{{ route('clients.index') }}">client List</a>
</div>

<h1>Edit city</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('clients.edit', $client) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter clients" values="{{old('nombre')}}">
@error('nombre')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="cedula">cedula</label>
<input type="text" name="cedula" id="cedula" placeholder="Enter cedula" values="{{old('cedula')}}">
@error('cedula')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholder="Enter correo" values="{{old('correo')}}">
@error('correo')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="telefono">cedula</label>
<input type="text" name="telefono" id="telefono" placeholder="Enter telefono" values="{{old('telefono')}}">
@error('telefono')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="direccion">cedula</label>
<input type="text" name="direccion" id="direccion" placeholder="Enter direccion" values="{{old('direccion')}}">
@error('direccion')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>

<div style="margin-bottom: 1em;">
<label for="cities_id">cities</label>
<select name="cities_id" id="cities_id" >
<option value="">select</option>
@foreach ($cities as $city)
<option
@if ($city->id === (int)old('cities_id'))
selected
@endif
value="{{$city->id}}">{{$city->nombre}}</option>
@endforeach
</select>
@error('cities_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
