@extends('layouts.base')

@section('title', '編集ページ')

@section('header')
    @parent
    <h2>編集ページ</h2>
@endsection

@section('content')
    <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
        @csrf
        <div>
            タイトル<br>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            本文<br>
            <textarea name="body">{{ $post->body }}</textarea>
        </div>
        <button type="submit">投稿</button>
    </form>
@endsection
