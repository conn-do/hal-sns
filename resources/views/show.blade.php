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
    <p>
        作成者: {{ $post->user->name }}
    </p>
    <div>
        <a href="{{ route('posts.edit', ['id' => $post->id]) }}">編集</a>
    </div>
    <div>
        <p>コメント</p>
        <a href="{{ route('comments.post', ['postId' => $post->id]) }}">
            コメントを投稿
        </a>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->comment }}</li>
            @endforeach
        </ul>
    </div>
@endsection
