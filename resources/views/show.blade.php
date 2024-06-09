@extends('layouts.base')

@section('title', $post->title)

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>
@endsection
