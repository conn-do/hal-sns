@extends('layouts.base')

@section('title', '投稿ページ')

@section('sidebar')
    @parent
    <h2>投稿ページ</h2>
@endsection

@section('content')
    <form action="/post" method="POST">
        @csrf

        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="body">本文</label>
            <textarea id="body" name="body"></textarea>
        </div>

        <div>
            <button type="submit">作成</button>
        </div>
    </form>
@endsection
