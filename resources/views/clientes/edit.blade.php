<div style="margin-bottom: 1em;">
<a href="{{route('clientes.index')}}">clientes list</a>
</div>

<h1>edit clientes</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('clientes.edit',$clientes)}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter clientes" value="{{$clientes->name}}">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 1em;">
<label for="apellido">apellido</label>
<input type="text" name="apellido" id="apellido" placeholder="enter apellido" value="{{$clientes->apellido}}">
@error(apellido)
<div style="color: red;">{{$message}}</div>
@enderror
<div style="margin-bottom: 1em;">
<label for="cedula">cedula</label>
<input type="text" name="cedula" id="cedula" placeholder="enter cedula" value="{{$clientes->cedula}}">
@error(cedula)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholder="enter correo" value="{{$clientes->correo}}">
@error(correo)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="telefono">telefono</label>
<input type="text" name="telefono" id="telefono" placeholder="enter telefono" value="{{$clientes->telefono}}">
@error(telefono)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="direccion">direccion</label>
<input type="text" name="direccion" id="direccion" placeholder="enter direccion" value="{{$clientes->direccion}}">
@error(direccion)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="ciudad_id">ciudad</label>
<select name="ciudad_id" id="ciudad_id">
<option  value="">select</option>
@foreach($ciudad as $ciudad)
<option
@if ($ciudad->===(int)$ciudad->ciudad_id)
selected
@endif
value="{{$ciudad->id}}">{{$ciudad->name}}</option>
@endforeach
</select>
@error('ciudad_id')
<div style="color:red;">{{message}}"</div>
@enderror
</div>
<div>
<button type="subtmit">submit</button>
</form>




