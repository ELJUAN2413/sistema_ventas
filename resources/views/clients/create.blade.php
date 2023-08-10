<div style="margin-bottom: 1em;">
<a href="{{ route('clients.index') }}">client List</a>
</div>
city
<h1>Create client</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('clients.create') }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter client" values="{{old('nombre')}}">
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
<label for="city_id">city</label>
<select name="city_id" id="city_id" >
<option value="">select</option>
@foreach ($cities as $city)
<option
@if ($city->id === (int)old('city_id'))
selected
@endif
value="{{$city->id}}">{{$city->nombre}}</option>
@endforeach
</select>
@error('city_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
