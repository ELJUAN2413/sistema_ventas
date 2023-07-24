<!DOCTYPE html>
<html>
    <head>
        <title>Authtenticacion personalizada</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<nav class="navbar navbar-ligth navbar-expand-lg mb-5" style="...">
<div class="container">
    <a class="navbar-brand mr-auto" href="#">Adsi Sena</a>
    <button class="navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-target="#navbarnav" aria-controls="navbarnav" aria-expanded="false" aria-label="toggle navigation">

    </button>
    <div class="collapse navbar-collapse" id="navbarnav">
        <ul class="navbar-nav">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('login)}}">Iniciar Session</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register-user)}}">Registrate</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('signout')}}">Salir</a>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
@yield('content')
</body>
</html>
