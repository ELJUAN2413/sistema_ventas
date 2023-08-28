<div style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">bills List</a>
  </div>
  bills
  <h1>Create bills</h1>
  @if(session('message'))
  <div style="color: green;">{{ session('message') }}</div>
  @endif
  <form action="{{ route('bills.create') }}" method="POST">
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
      <label for="fecha">fecha</label>
      <input type="date" name="fecha" id="fecha" placeholder="Enter fecha" values="{{old('fecha')}}">
      @error('fecha')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div style="margin-bottom: 1em;">
      <label for="productos">productos</label>
      <input type="text" name="productos" id="productos" placeholder="Enter productos" values="{{old('productos')}}">
      @error('productos')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div style="margin-bottom: 1em;">
      <label for="precio">precio</label>
      <input type="decimal" name="precio" id="precio" placeholder="Enter precio" values="{{old('precio')}}">
      @error('precio')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    <div style="margin-bottom: 1em;">
      <label for="employees_id">employee</label>
      <select name="employees_id" id="employees_id">
        <option value="">select</option>
        @foreach ($employees as $employee)
        <option
        @if ($employee->id === (int)old('employees_id'))
          selected
          @endif
          value="{{$employee->id}}">{{$employee->nombre}}</option>
        @endforeach
      </select>
      @error('employees_id')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>

      <button type="submit">Submit</button>
    </div>
  </form>
