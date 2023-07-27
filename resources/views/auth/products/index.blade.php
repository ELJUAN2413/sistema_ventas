<div><a href="/">home</a></div>
<a href="{{route('products.create')}}">new product</a>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
    <thead>
        <tr>
            <td>no</td>
            <td>name</td>
            <td>price</td>
            <td>category</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @forelse($products as key->$products)
        <tr>
            <td>{{$products->firstitem()+ key}}.</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
                {{$product->category->name}}
            </td>
            <td>
                <a href="{{route('products.edit', $product)}}">edit</a>

                <form action="{{route('products.delete', $product)}}" method="post">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">no data found in table</td>
        </tr>
        @endforelse
    </tbody>
</table>
