<div style="margin-bottom: 1em;">
<a href="{{route('departamento.index')}}">departamento list</a>
</div>

<h1>edit departamento</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('departamento.edit',$departamento)}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter departamento" value="{{$departamento->name}}">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>

<div style="margin-bottom: 1em;">
<label for="pais_id">pais</label>
<select name="pais_id" id="pais_id">
<option  value="">select</option>
@foreach($pais as $pais)
<option
@if ($pais->===(int)$departamento->pais_id)
selected
@endif
value="{{$pais->id}}">{{$pais->name}}</option>
@endforeach
</select>
@error('pais_id')
<div style="color:red;">{{message}}"</div>
@enderror
</div>
<div>
<button type="subtmit">submit</button>
</form>
