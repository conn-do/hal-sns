@extends('layouts.base')

@section('title', 'コメント投稿ページ')

@section('header')
    @parent
    <h2>コメント投稿ページ</h2>
@endsection

@section('content')
    <form action="{{ route('comments.save', ['postId' => $post->id]) }}" method="POST">
        @csrf
        <div>
            コメント<br>
            <textarea name="comment"></textarea>
        </div>
        <button type="submit">投稿</button>
    </form>
@endsection
