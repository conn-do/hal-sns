@extends('layouts.base')

@section('title', 'マイページ')

@section('header')
    @parent
    <h2>マイページ</h2>
@endsection

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endsection
