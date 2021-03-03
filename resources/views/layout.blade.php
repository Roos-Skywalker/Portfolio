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
        <li class="nav {{Request::path() === 'profile' ? 'active' : ''}}"><a href="/profile">Profiel pagina</a></li>
        <li class="nav {{Request::path() === 'dashboard' ? 'active' : ''}}"><a href="/dashboard">Dashboard</a></li>
        <li class="nav {{Request::path() === 'motivatie' ? 'active' : ''}}"><a href="/motivatie">Motivatie</a></li>
        <li class="nav {{Request::path() === 'beroepsbeeld' ? 'active' : ''}}"><a href="/beroepsbeeld">Beroepsbeeld</a></li>
        <li class="nav {{Request::path() === 'construction' ? 'active' : ''}}"><a href="/construction">Curriculum Vitea</a></li>
        <li class="nav {{Request::path() === 'blog' ? 'active' : ''}}"><a href="/blog">Blog</a></li>
    </ul>
@yield('content')
</body>
</html>
