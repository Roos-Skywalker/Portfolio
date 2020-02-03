<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <ul id="navbar">
        <li class="nav" class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/index.php">Home</a></li>
        <li class="nav"><a href="/profile.php">Profiel pagina</a></li>
        <li class="nav"><a href="/dashboard.php">Dashboard</a></li>
        <li class="nav"><a href="/motivatie.php">Motivatie</a></li>
        <li class="nav"><a href="/beroepsbeeld.php">Beroepsbeeld</a></li>
        <li class="nav"><a href="/construction.php">Curriculum Vitea</a></li>
    </ul>
@yield('homepage')
    @yield('beroepsbeeld')
</body>
</html>
