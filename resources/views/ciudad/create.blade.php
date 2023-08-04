<div style="margin-bottom: 1em;">
    <a href="{{route('ciudad.index')}}">ciudad list</a>
</div>

<h1>create ciudad</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('ciudad.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter ciudad" value="{{old('name')}}">
        @error('name')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="departamento_id">departamento</label>
        <select name="departamento_id" id="departamento_id">
            <option value="">select</option>
            @foreach($departamentos as $departamento)
            <option>
                @if ($departamento->id = (int)old('departamento_id'))
                selected
                @endif
                value="{{$departamento_id}}">{{$departamento->name}}</option>
            @endforeach
        </select>
        @error('departamento_id')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <div>
            <button type="submit">submit</button>
    </div>
</form>
