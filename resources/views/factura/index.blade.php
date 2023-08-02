<div><a href="/">home</a></div>
<a href="{{ route('factura.create') }}">New factura</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>fecha</td>
      <td>productos</td>
      <td>direccion</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($empleados as key-> $empleados)
    <tr>
      <td>{{$factura->firstitem() + $key}}.</td>
      <td>{{$factura->fecha}}</td>
      <td>{{$factura->productos}}</td>
      <td>{{$factura->direccion}}</td>
      <td>{{$empleados->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('factura.edit', $factura)}}">edit</a>

        <form action="{{ route('factura.delete', $factura)}}" method="post">
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
