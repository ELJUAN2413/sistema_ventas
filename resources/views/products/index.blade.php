<div><a href="/">Home</a></div>
<a href="{{ route('products.create') }}">New product</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>precio</td>
<td>category</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($products as $key => $product)
<tr>
<td>{{ $products->firstItem() + $key }}.</td>
<td>{{ $product->nombre }}</td>
<td>{{ $product->precio }}</td>


<td>{{ $product->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('products.edit', $product) }}">Edit</a>

<form Action="{{ route('products.delete', $product) }}" method="post"
@csrf
<button type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="5">No data found in table </td>
</tr>
@endforelse
</tbody>
</table>
