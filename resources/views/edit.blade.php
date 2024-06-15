@extends('layouts.base')

@section('title', '投稿ページ')

@section('sidebar')
    @parent
    <h2>編集ページ</h2>
@endsection

@section('content')
    <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
        @csrf

        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="body">本文</label>
            <textarea id="body" name="body">{{ $post->body }}</textarea>
        </div>

        <div>
            <button type="submit">更新</button>
        </div>
    </form>
@endsection
