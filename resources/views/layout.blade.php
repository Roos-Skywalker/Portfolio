<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <script type="text/javascript" src="/js/javascript.js"></script>
    <ul id="navbar">
        <li class="nav" class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/">Home</a></li>
        <li class="nav"><a href="/profile">Profiel pagina</a></li>
        <li class="nav"><a href="/dashboard">Dashboard</a></li>
        <li class="nav"><a href="/motivatie">Motivatie</a></li>
        <li class="nav"><a href="/beroepsbeeld">Beroepsbeeld</a></li>
        <li class="nav"><a href="/construction">Curriculum Vitea</a></li>
        <li class="nav"><a href="/construction">Blog</a></li>
    </ul>
@yield('content')
</body>
</html>
