<div><a href="/">home</a></div>
<a href="{{route('ciudad.create')}}">new ciudad</a>

@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
    <thead>
        <tr>
            <td>no</td>
            <td>name</td>
            <td>departamento_id</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @forelse($ciudades as key->$ciudad)
        <tr>
            <td>{{$ciudades->firstitem()+ key}}.</td>
            <td>{{$ciudad->name}}</td>
            <td>
                {{$ciudades->departamento->name}}
            </td>
            <td>
                <a href="{{route('ciudad.edit', $ciudad)}}">edit</a>

                <form action="{{route('ciudad.delete', $ciudad)}}" method="post">
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

