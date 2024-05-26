<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ExampleController extends Controller
{
    public function index()
    {
        $post = Post::first();

        return view('example', [
            'post' => $post,
        ]);
    }
}
