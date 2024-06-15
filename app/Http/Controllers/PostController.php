<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', [
            'posts' => $posts,
        ]);
    }

    public function show(int $id)
    {
        $post = Post::find($id);

        return view('show', [
            'post' => $post,
        ]);
    }

    public function post()
    {
        return view('post');
    }

    public function save(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->save();

        return redirect('/');
    }
}
