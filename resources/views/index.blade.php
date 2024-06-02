@extends('layouts.default')

@section('title', '投稿一覧')

@section('header')
    @parent
@endsection

@section('content')
    @foreach ($posts as $post)
        <p>{{ $post->title }}<p>
    @endforeach
    <p>
        <a href="/post">新規投稿</a>
    </p>
@endsection
