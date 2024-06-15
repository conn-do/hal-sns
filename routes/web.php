<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/example', [ExampleController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post', [PostController::class, 'post']);
Route::post('/post', [PostController::class, 'save']);
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/post/{id}/edit', [PostController::class, 'update'])->name('posts.update');
Route::get('/post/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/post/{postId}/comment', [CommentController::class, 'post'])->name('comments.post');
Route::post('/post/{postId}/comment', [CommentController::class, 'save'])->name('comments.save');
