<div style="margin-bottom: 1em;">
    <a href="{{ route('customers.index') }}">customers List</a>
  </div>
employee
  <h1>Create customers</h1>
  @if(session('message'))
  <div style="color: green;">{{ session('message') }}</div>
  @endif
  <form action="{{ route('customers.create') }}" method="POST">
    @csrf
    <div style="margin-bottom: 1em;">
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" id="nombre" placeholder="Enter client" values="{{old('nombre')}}">
      @error('nombre')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Enter apellido" values="{{old('apellido')}}">
        @error('apellido')
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
      <label for="telefono">telefono</label>
      <input type="text" name="telefono" id="telefono" placeholder="Enter telefono" values="{{old('telefono')}}">
      @error('telefono')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div style="margin-bottom: 1em;">
      <label for="direccion">direccion</label>
      <input type="text" name="direccion" id="direccion" placeholder="Enter direccion" values="{{old('direccion')}}">
      @error('direccion')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="cargo">cargo</label>
        <input type="text" name="cargo" id="cargo" placeholder="Enter cargo" values="{{old('cargo')}}">
        @error('cargo')
        <div style="color: red;">{{ $message }}</div>
        @enderror
      </div>
    <div style="margin-bottom: 1em;">
      <label for="cities_id">city</label>
      <select name="cities_id" id="cities_id">
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

      <button type="submit">Submit</button>
    </div>
  </form>
