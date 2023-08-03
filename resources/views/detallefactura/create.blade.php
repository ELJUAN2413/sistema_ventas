<div style="margin-bottom: 1em;">
    <a href="{{route('detallefactura.index')}}">detallefactura list</a>
</div>

<h1>create detallefactura</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('detallefactura.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="cantidad">cantidad</label>
        <input type="text" name="cantidad" id="cantidad" placeholder="enter cantidad" value="{{old('cantidad')}}">
        @error('cantidad')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="precio">precio</label>
        <input type="text" name="precio" id="precio" placeholder="enter precio" value="{{old('precio')}}">
        @error('precio')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="factura_id">factura</label>
        <select name="factura_id" id="factura_id">
            <option value="">select</option>
            @foreach($factura as $facturaç)
            <option>
                @if ($factura->id = (int)old('factura_id'))
                selected
                @endif
                value="{{$factura_id}}">{{$factura->name}}</option>
            @endforeach
        </select>
        @error('factura_id')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <div>
            <button type="submit">submit</button>
    </div>
</form>
