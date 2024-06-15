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

    <div>
        <a href="{{ route('posts.edit', ['id' => $post->id]) }}">編集</a>
    </div>

    <div>
        <a href="{{ route('posts.delete', ['id' => $post->id]) }}">削除</a>
    </div>
@endsection
