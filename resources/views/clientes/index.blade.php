<div><a href="/">home</a></div>
<a href="{{ route('clientes.create') }}">New clientes</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>name</td>
      <td>apellido</td>
      <td>cedula</td>
      <td>correo</td>
      <td>telefono</td>
      <td>direccion</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($clientes as key-> $clientes)
    <tr>
      <td>{{$clientes->firstitem() + $key}}.</td>
      <td>{{$clientes->name}}</td>
      <td>{{$clientes->apellido}}</td>
      <td>{{$clientes->cedula}}</td>
       <td>{{$clientes->correo}}</td>
      <td>{{$clientes->telefono}}</td>
      <td>{{$clientes->direccion}}</td>
      <td>{{$clientes->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('clientes.edit', $clientes)}}">edit</a>

        <form action="{{ route('clientes.delete', $clientes)}}" method="post">
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
