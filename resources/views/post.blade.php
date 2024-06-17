@extends('layouts.base')

@section('title', '新規投稿ページ')

@section('header')
    @parent
    <h2>新規投稿ページ</h2>
@endsection

@section('content')
    <form action="{{ route('posts.save') }}" method="POST">
        @csrf
        <div>
            タイトル<br>
            <input type="text" name="title">
        </div>
        <div>
            本文<br>
            <textarea name="body"></textarea>
        </div>
        <button type="submit">投稿</button>
    </form>
@endsection
