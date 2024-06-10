@extends('layouts.base')

@section('title', $post->title)

@section('header')
    @parent
    <h2>{{ $post->title }}</h2>
@endsection

@section('content')
    <p>
        {{ $post->body }}
    </p>
@endsection
