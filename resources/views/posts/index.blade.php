@extends('layout')
@section('content')
    <main>
        <h1>Blog</h1>
        <span class="span">
            <h2>Articles</h2>
                @foreach($posts as $post)
                <p>{{$post->title}}</p>
                <p>{{$post->body}}</p>
            @endforeach
            <form action="/blog/create" method="GET">
                <button type="submit">Add</button>
            </form>
            <button type="submit">Edit</button>
            <button type="submit">Delete</button>
        </span>
    </main>
@endsection
