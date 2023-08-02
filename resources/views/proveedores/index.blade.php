<div><a href="/">home</a></div>
<a href="{{ route('proveedores.create') }}">New proveedores</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>name</td>
      <td>telefono</td>
      <td>direccion</td>
      <td>correo</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($proveedores as key-> $proveedores)
    <tr>
      <td>{{$proveedores->firstitem() + $key}}.</td>
      <td>{{$proveedores->name}}</td>
      <td>{{$proveedores->telefono}}</td>
      <td>{{$proveedores->direccion}}</td>
      <td>{{$proveedores->correo}}</td>
      <td>{{$categories->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('proveedores.edit', $proveedores)}}">edit</a>

        <form action="{{ route('proveedores.delete', $proveedores)}}" method="post">
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
