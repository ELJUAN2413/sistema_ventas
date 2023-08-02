<div style="margin-bottom: 1em;">
    <a href="{{route('clientes.index')}}">clientes list</a>
</div>

<h1>create clientes</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('clientes.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter clientes" value="{{old('name')}}">
        @error('name')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="enter apellido" value="{{old('apellido')}}">
        @error('apellido')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="cedula">cedula</label>
        <input type="text" name="cedula" id="cedula" placeholder="enter cedula" value="{{old('cedula')}}">
        @error('cedula')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="correo">correo</label>
        <input type="text" name="correo" id="correo" placeholder="enter correo" value="{{old('correo')}}">
        @error('correo')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="telefono">telefono</label>
        <input type="text" name="telefono" id="telefono" placeholder="enter telefono" value="{{old('telefono')}}">
        @error('telefono')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="direccion">direccion</label>
        <input type="text" name="direccion" id="direccion" placeholder="enter direccion" value="{{old('direccion')}}">
        @error('direccion')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="ciudad_id">ciudad</label>
        <select name="ciudad_id" id="ciudad_id">
            <option value="">select</option>
            @foreach($ciudad as $ciudad)
            <option>
                @if ($ciudad->id = (int)old('ciudad_id'))
                selected
                @endif
                value="{{$ciudad_id}}">{{$ciudad->name}}</option>
            @endforeach
        </select>
        @error('ciudad_id')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <div>
            <button type="submit">submit</button>
    </div>
</form>
