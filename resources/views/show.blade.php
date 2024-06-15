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

    <hr>

    <h3>コメント</h3>

    <ul>
        @foreach ($post->comments as $comment)
            <li>
                {{ $comment->comment }}
                <a href="{{ route('comments.edit', ['postId' => $post->id, 'id' => $comment->id]) }}">編集</a>
                <a href="{{ route('comments.delete', ['postId' => $post->id, 'id' => $comment->id]) }}">削除</a>
            </li>
        @endforeach
    </ul>

    <div>
        <a href="{{ route('comments.post', ['postId' => $post->id]) }}">コメント投稿</a>
    </div>
@endsection
