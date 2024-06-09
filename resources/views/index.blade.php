@extends('layouts.base')

@section('title', '投稿一覧')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>投稿一覧</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    <div>
        <a href="/post">新規投稿</a>
    </div>
@endsection
