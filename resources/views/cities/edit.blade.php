<div style="margin-bottom: 1em;">
<a href="{{ route('cities.index') }}">city List</a>
</div>

<h1>Edit city</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('cities.edit', $city) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter city" value="{{ $city->nombre}}">
@error('nombre')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
<div style="margin-bottom: 1em;">
<label for="departament_id" id="departament_id">
<option value="">select</option>
@foreach ($departaments as $departament )
<option
@if ($departament->id ===(int)$city->departament_id)
selected
@endif
value="{{$departament->id}}">{{$departament->nombre}}</option>
@endforeach
</select>
@error('departament_id')
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div>
<button type="submit">submit</button>
</div>
</form>
