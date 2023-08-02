<div style="margin-bottom: 1em;">
    <a href="{{route('proveedores.index')}}">proveedores list</a>
</div>

<h1>create proveedores</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('proveedores.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter proveedores" value="{{old('name')}}">
        @error('name')
        <div style="color:red;">{{$message}}</div>
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
        <label for="correo">correo</label>
        <input type="text" name="correo" id="correo" placeholder="enter correo" value="{{old('correo')}}">
        @error('correo')
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
