@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
@section('details')
    <p>Sorry, the site is temporarily down for maintenance or
        there are too many visitors at the same time.
        Try visiting us later.</p>
@endsection
