<div style="margin-bottom: 1em;">
<a href="{{route('pais.index')}}">pais list</a>
</div>

<h1>create pais</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('pais.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter pais">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>


</form>
