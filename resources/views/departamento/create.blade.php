<div style="margin-bottom: 1em;">
    <a href="{{route('departamento.index')}}">departamento list</a>
</div>

<h1>create departamento</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('departamento.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter departamento" value="{{old('name')}}">
        @error('name')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="pais_id">departamento</label>
        <select name="pais_id" id="pais_id">
            <option value="">select</option>
            @foreach($departamento as $departamento)
            <option>
                @if ($pais->id = (int)old('pais_id'))
                selected
                @endif
                value="{{$pais_id}}">{{$pais->name}}</option>
            @endforeach
        </select>
        @error('pais_id')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <div>
            <button type="submit">submit</button>
    </div>
</form>
