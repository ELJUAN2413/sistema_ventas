<div style="margin-bottom: 1em;">
  <a href="{{ route('products.index') }}">product List</a>
</div>
city
<h1>Create product</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <div style="margin-bottom: 1em;">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Enter product" values="{{old('nombre')}}">
    @error('nombre')
    <div style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div style="margin-bottom: 1em;">
    <label for="precio">precio</label>
    <input type="text" name="precio" id="precio" placeholder="Enter precio" values="{{old('precio')}}">
    @error('precio')
    <div style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div style="margin-bottom: 1em;">
    <label for="category_id">category</label>
    <select name="category_id" id="category_id">
      <option value="">select</option>
      @foreach ($categories as $category)
      <option @if ($category->id === (int)old('category_id'))
        selected
        @endif
        value="{{$category->id}}">{{$category->nombre}}</option>
      @endforeach
    </select>
    @error('category_id')
    <div style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>
