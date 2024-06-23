<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post', [PostController::class, 'post']);
Route::post('/post', [PostController::class, 'save'])->name('posts.save');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/post/{id}/edit', [PostController::class, 'update'])->name('posts.update');
Route::get('/post/{postId}/comment', [CommentController::class, 'post'])->name('comments.post');
Route::post('/post/{postId}/comment', [CommentController::class, 'save'])->name('comments.save');
