<div><a href="/">home</a></div>
<a href="{{ route('pais.create') }}">New pais</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>name</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($pais as key-> $pais)
    <tr>
      <td>{{$pais->firstitem() + $key}}.</td>
      <td>{{$pais->name}}</td>
      <td>{{$pais->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('pais.edit', $pais)}}">edit</a>

        <form action="{{ route('pais.delete', $pais)}}" method="post">
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
