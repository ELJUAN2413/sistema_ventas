<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()}}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{csrf_token()}}">

  <tittle>{{ config('app.name', 'laravel')}}</tittle>


  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=nunito" rel="stylesheet">


  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a>"class=navbar-brand" href="{{ url('/')}}">
          {{config('app.name', 'laravel')}}
        </a>
        <button>
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsupportedcontent"
          aria-controls="navbarsupportedcontent"
          ariaexpanded="false"
          aria-label="{{__('toggle navigation')}}">
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarsupportedcontent">

          <ul class="navbar-nav me-auto">

          </ul>
          <ul class="navbar-nav ms-auto">
            @guest
            @if (route::has('login'))
            <li class="nav-item" <a class="nav-link" href="{{ route('register-user')">{{__(register)}}</a>
</li>
@endif

@if(route::has('register-user'))
<li class=" nav-item">
              <a class="nav-link" href="{{route(register-user)}}">{{__('register')}}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown" ...>
              @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      @yield('content')
    </main>
  </div >
</body>

</html>
