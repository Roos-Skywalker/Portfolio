<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    @stack('css')
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <script type="text/javascript" src="/js/javascript.js"></script>
    <ul class="navbar">
        <li class="nav {{Request::path() === '/' ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="nav {{Request::path() === 'profile' ? 'active' : ''}}"><a href="{{url('/profile')}}">Profiel pagina</a></li>
        <li class="nav {{Request::path() === 'assignments' ? 'active' : ''}}"><a href="{{route('assignments.index')}}">Dashboard</a></li>
        <li class="nav {{Request::path() === 'motivatie' ? 'active' : ''}}"><a href="{{url('/motivatie')}}">Motivatie</a></li>
        <li class="nav {{Request::path() === 'beroepsbeeld' ? 'active' : ''}}"><a href="{{url('/beroepsbeeld')}}">Beroepsbeeld</a></li>
        <li class="nav {{Request::path() === 'error/503' ? 'active' : ''}}"><a href="{{url('error/503')}}">Curriculum Vitea</a></li>
        @if (Route::has('login'))
            @auth
                <li class="nav"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Uitloggen</a></li>
            @else
                <li class="nav {{Request::path() === 'login' ? 'active' : ''}}"><a href="{{route('login')}}">Inloggen</a></li>
                @if (Route::has('register'))
                    <li class="nav {{Request::path() === 'register' ? 'active' : ''}}"><a href="{{route('register')}}">Registreren</a></li>
                @endif
            @endif
        @endif
    </ul>

    <form id="logout" action="{{route('logout')}}" method="post" style="display: none">
        @csrf
    </form>
@yield('content')
</body>
</html>
