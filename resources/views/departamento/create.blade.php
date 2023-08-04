<div style="margin-bottom: 1em;">
    <a href="{{route('departamentos.index')}}">departamento list</a>
</div>

<h1>create departamento</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('departamentos.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter departamento" value="{{old('name')}}">
        @error('name')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>

    <div>
    <button type="submit">submit</button>
    </div>


</form>
