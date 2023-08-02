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
      <td>apellido</td>
      <td>cedula</td>
      <td>correo</td>
      <td>telefono</td>
      <td>direccion</td>
      <td>cargo</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($empleados as key-> $empleados)
    <tr>
      <td>{{$empleados->firstitem() + $key}}.</td>
      <td>{{$empleados->name}}</td>
      <td>{{$empleados->apellido}}</td>
      <td>{{$empleados->cedula}}</td>
      <td>{{$empleados->correo}}</td>
      <td>{{$empleados->telefono}}</td>
      <td>{{$empleados->direccion}}</td>
      <td>{{$empleados->cargo}}</td>
      <td>{{$empleados->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('empleados.edit', $empleados)}}">edit</a>

        <form action="{{ route('empleados.delete', $empleados)}}" method="post">
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
