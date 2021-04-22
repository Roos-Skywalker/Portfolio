@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span class="span">
        <h2>Studiemonitor met DB</h2>
        <form method="POST" action="/blog/{{$post->id}}">
            @csrf
            @method('PUT')
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" value="{{$post->slug}}">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{$post->title}}>
            <label for="body">Body</label>
            <textarea id="body" name="body">value="{{$post->body}}</textarea>
            <button type="submit">Add</button>
        </form>
        </span>
    </main>
@endsection
