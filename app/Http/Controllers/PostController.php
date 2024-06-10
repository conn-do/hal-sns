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
}
