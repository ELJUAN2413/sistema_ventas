<div><a href="/">home</a></div>
<a href="{{route('departamento.create')}}">new departamento</a>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
    <thead>
        <tr>
            <td>no</td>
            <td>name</td>
            <td>pais_id</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @forelse($departamentos as $key->$departamento)
        <tr>
            <td>{{$departamentos->firstitem()+ key}}.</td>
            <td>{{$departamento->name}}</td>
            <td>
                {{$departamento->pais->name}}
            </td>
            <td>
                <a href="{{route('departamentos.edit', $departamento)}}">edit</a>

                <form action="{{route('departamentos.delete', $departamento)}}" method="post">
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

