<div style="margin-bottom: 1em;">
<a href="{{route('factura.index')}}">factura list</a>
</div>

<h1>edit factura</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('factura.edit',$factura)}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="fecha">fecha</label>
    <input type="date" name="fecha" id="fecha" placeholder="enter fecha" value="{{$factura->fecha}}">
    @error('fecha')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 1em;">
<label for="producto">producto</label>
<input type="text" name="producto" id="producto" placeholder="enter producto" value="{{$factura->producto}}">
@error(producto)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="direccion">direccion</label>
<input type="text" name="direccion" id="direccion" placeholder="enter direccion" value="{{$empleados->direccion}}">
@error(telefono)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="empleados_id">empleados</label>
<select name="empleados_id" id="empleados_id">
<option  value="">select</option>
@foreach($empleados as $empleados)
<option
@if ($empleados->===(int)$empleados->empleados_id)
selected
@endif
value="{{$empleados->id}}">{{$empleados->name}}</option>
@endforeach
</select>
@error('empleados_id')
<div style="color:red;">{{message}}"</div>
@enderror
</div>
<div>
<button type="subtmit">submit</button>
</form>




