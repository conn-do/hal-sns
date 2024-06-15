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

    public function edit(int $id)
    {
        $post = Post::find($id);

        return view('edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect()->route('posts.show', [
            'id' => $post->id,
        ]);
    }

    public function delete(int $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }
}
