<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'サンプルタイトル1';
        $post->body = 'サンプル本文です。サンプル本文です。サンプル本文です。';
        $post->save();
    }
}
