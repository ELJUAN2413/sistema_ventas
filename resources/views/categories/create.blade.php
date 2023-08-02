<div style="margin-bottom: 1em;">
<a href="{{route('categories.index')}}">category list</a>
</div>

<h1>create category</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('categories.create')}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter category">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>

<div style="margin-bottom: 1em;">
<label for="description">description</label>
<input type="text" name="description" id="description" placeholder="enter description">
@error('description')
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div>
    <button type="submit">submit</button>
</div>
</form>