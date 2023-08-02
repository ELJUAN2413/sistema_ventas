<div style="margin-bottom: 1em;">
<a href="{{route('empleados.index')}}">empleados list</a>
</div>

<h1>edit empleados</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('empleados.edit',$empleados)}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter empleados" value="{{$empleados->name}}">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 1em;">
<label for="apellido">apellido</label>
<input type="text" name="apellido" id="apellido" placeholder="enter apellido" value="{{$empleados->apellido}}">
@error(apellido)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="cedula">cedula</label>
<input type="text" name="cedula" id="cedula" placeholder="enter cedula" value="{{$empleados->cedula}}">
@error(cedula)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholder="enter correo" value="{{$empleados->correo}}">
@error(telefono)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="telefono">telefono</label>
<input type="text" name="telefono" id="telefono" placeholder="enter telefono" value="{{$empleados->telefono}}">
@error(telefono)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="direccion">direccion</label>
<input type="text" name="direccion" id="direccion" placeholder="enter direccion" value="{{$empelados->direccion}}">
@error(telefono)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="cargo">cargo</label>
<input type="text" name="cargo" id="cargo" placeholder="enter cargo" value="{{$empleados->cargo}}">
@error(cargo)
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




