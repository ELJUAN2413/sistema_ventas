<div><a href="/">home</a></div>
<a href="{{ route('detallefactura.create') }}">New detallefactura</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>cantidad</td>
      <td>precio</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($detallefactura as key-> $detallefactura)
    <tr>
      <td>{{$detallefactura->firstitem() + $key}}.</td>
      <td>{{$detallefactura->cantidad}}</td>
      <td>{{$detallefactura->precio}}</td>
      <td>{{$detallefactura->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('detallefactura.edit', $detallefactura)}}">edit</a>

        <form action="{{ route('detallefactura.delete', $detallefactura)}}" method="post">
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
