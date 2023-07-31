<div><a href="/">home</a></div>
<a href="{{ route('categories.create') }}">New category</a>

@if(session('message'))
<div style="color: green;">{{session('message') }} </div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>name</td>
      <td>description</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as key-> $category)
    <tr>
      <td>{{$categories->firstitem() + $key}}.</td>
      <td>{{$categories->description}}</td>
      <td>{{$categories->created_at->format('f d,y')}}</td>
      <td>
        <a href="{{ route('categories.edit', $category)}}">edit</a>

        <form action="{{ route('categories.delete', $category)}}" method="post">
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
