<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function post(int $postId)
    {
        $post = Post::find($postId);

        return view('comment', [
            'post' => $post,
        ]);
    }

    public function save(Request $request, int $postId)
    {
        $post = Post::find($postId);
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $post->comments()->save($comment);

        return redirect()->route('posts.show', [
            'id' => $postId,
        ]);
    }

    public function edit(int $postId, int $id)
    {
        $comment = Comment::find($id);

        return view('commentEdit', [
            'comment' => $comment,
        ]);
    }

    public function update(Request $request, int $postId, int $id)
    {
        $comment = Comment::find($id);
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->route('posts.show', [
            'id' => $postId,
        ]);
    }

    public function delete(int $postId, int $id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('posts.show', [
            'id' => $postId,
        ]);
    }
}
