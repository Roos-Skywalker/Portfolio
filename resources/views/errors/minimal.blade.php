<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        <style>
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
        </style>
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
        <div class="flex-center position-ref full-height">
            <div class="code">
                @yield('code')
            </div>

            <div class="message" style="padding: 10px;">
                @yield('message')
            </div>
        </div>
    </body>
</html>
