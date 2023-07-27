<div style="margin-bottom: 1em;">
<a href="{{route('products.index')}}">product list</a>
</div>

<h1>edit product</h1>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<form action="{{route('products.edit',$product)}}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter category" value="{{$product->name}}">
    @error('name')
    <div style="color: red;">{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 1em;">
<label for="price">price</label>
<input type="text" name="price" id="price" placeholder="enter price" value="{{$product->price}}">
@error(price)
<div style="color: red;">{{$message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="category_id">category</label>
<select name="category-id" id="category_id">
<option  value="">select</option>
@foreach($categories as $category)
<option
@if ($category->===(int)$product->category_id)
selected
@endif
value="{{$category->id}}">{{$category->name}}</option>
@endforeach
</select>
@error('category_id')
<div style="color:red;">{{message}}"</div>
@enderror
</div>
<div>
<button type="subtmit">submit</button>
</form>
