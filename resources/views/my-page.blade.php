@extends('layouts.base')

@section('title', 'マイページ')

@section('header')
    @parent
    <h2>マイページ</h2>
@endsection

@section('content')
    <h3>自分の投稿</h3>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
