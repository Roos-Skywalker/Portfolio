@extends('layout')
@section('content')
    @foreach($posts as $post)

        <p>{{$post->title}}</p>
    @endforeach
@endsection
