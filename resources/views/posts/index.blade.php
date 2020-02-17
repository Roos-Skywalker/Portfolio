@extends('layout')
@section('content')
    <main>
        <h1>Blog</h1>
        <span>
            <h2>Articles</h2>
                @foreach($posts as $post)
                <p>{{$post->title}}</p>
                <p>{{$post->body}}</p>
                @endforeach
            <button type="submit">Add</button>
            <button type="submit">Edit</button>
            <button type="submit">Delete</button>
        </span>
    </main>
@endsection
