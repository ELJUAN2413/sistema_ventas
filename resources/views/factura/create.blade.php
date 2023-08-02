<div style="margin-bottom: 1em;">
    <a href="{{route('factura.index')}}">factura list</a>
</div>

<h1>create factura</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('factura.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="factura">factura</label>
        <input type="date" name="factura" id="factura" placeholder="enter factura" value="{{old('factura')}}">
        @error('factura')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="producto">producto</label>
        <input type="text" name="producto" id="producto" placeholder="enter producto" value="{{old('producto')}}">
        @error('producto')
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
        <label for="empleados_id">empleados</label>
        <select name="empleados_id" id="empleados_id">
            <option value="">select</option>
            @foreach($empleados as $empleados)
            <option>
                @if ($empleados->id = (int)old('empleados_id'))
                selected
                @endif
                value="{{$empleados_id}}">{{$empleados->name}}</option>
            @endforeach
        </select>
        @error('empleados_id')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <div>
            <button type="submit">submit</button>
    </div>
</form>
