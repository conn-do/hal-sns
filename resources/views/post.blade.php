@extends('layouts.base')

@section('title', '新規投稿ページ')

@section('header')
    @parent
    <h2>新規投稿ページ</h2>
@endsection

@section('content')
    <form action="{{ route('posts.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            タイトル<br>
            <input type="text" name="title">
        </div>
        <div>
            本文<br>
            <textarea name="body"></textarea>
        </div>
        <div>
            画像<br>
            <input type="file" name="image">
        </div>
        <button type="submit">投稿</button>
    </form>
@endsection
