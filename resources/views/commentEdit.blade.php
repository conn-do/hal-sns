@extends('layouts.base')

@section('title', 'コメントページ')

@section('sidebar')
    @parent
    <h2>コメントページ</h2>
@endsection

@section('content')
    <form action="{{ route('comments.update', ['postId' => $comment->post->id, 'id' => $comment->id]) }}" method="POST">
        @csrf

        <div>
            <label for="comment">コメント</label>
            <textarea id="comment" name="comment">{{ $comment->comment }}</textarea>
        </div>

        <div>
            <button type="submit">投稿</button>
        </div>
    </form>
@endsection
