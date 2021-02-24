@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span>
        <h2>Studiemonitor met DB</h2>
        <form method="POST" action="/blog">
            @csrf
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
            <label for="body">Body</label>
            <textarea id="body" name="body"></textarea>
            <button type="submit">Submit</button>
        </form>
        </span>
    </main>
@endsection
