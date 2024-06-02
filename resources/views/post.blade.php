@extends('layouts.default')

@section('title', '新規投稿')

@section('content')
    <h1>新規投稿</h1>
    <form action="{{ route('post.save') }}" method="POST">
        @csrf
        <p>
            タイトル<br>
            <input name="title">
        </p>
        <p>
            本文<br>
            <textarea name="body"></textarea>
        </p>
        <p>
            <button type="submit">投稿</button>
        </p>
    </form>
@endsection
