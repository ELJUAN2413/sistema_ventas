<div style="margin-bottom: 1em;">
    <a href="{{ route('detail_invoices.index') }}">detail_invoices List</a>
  </div>
  detail_invoices
  <h1>Create detail_invoices</h1>
  @if(session('message'))
  <div style="color: green;">{{ session('message') }}</div>
  @endif
  <form action="{{ route('detail_invoices.create') }}" method="POST">
    @csrf
    <div style="margin-bottom: 1em;">
      <label for="cantidad">cantidad</label>
      <input type="text" name="cantidad" id="cantidad" placeholder="Enter cantidad" values="{{old('cantidad')}}">
      @error('cantidad')
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
      <label for="bills_id">bills</label>
      <select name="bills_id" id="bills_id">
        <option value="">select</option>
        @foreach ($bills as $bill)
        <option
        @if ($bill->id === (int)old('bills_id'))
          selected
          @endif
          value="{{$bill->id}}">{{$bill->nombre}}</option>
        @endforeach
      </select>
      @error('bills_id')
      <div style="color: red;">{{ $message }}</div>
      @enderror
    </div>

      <button type="submit">Submit</button>
    </div>
  </form>
