@extends('layout')
@section('content')
    <h1>I should be Cyberspace font</h1>
    <h2>I should be CPU font</h2>
    <div class="flex-center position-ref full-height">
        @auth
            <div class="top-right links">
                <a href="#" onclick="event.preventDefault(); document.getElementById('userDestroy').submit();">Verwijder account</a>
            </div>
        @endauth

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection
