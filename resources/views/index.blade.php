@extends('layouts.base')

@section('title', '投稿一覧ページ')

@section('header')
    @parent
    <h2>投稿一覧ページ</h2>
@endsection

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <div>
        <a href="/post">新規投稿</a>
    </div>
@endsection
