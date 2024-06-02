@extends('layouts.default')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @foreach ($posts as $post)
        {{ $post->title }}
    @endforeach
@endsection
