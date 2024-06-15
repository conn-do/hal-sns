<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/example', [ExampleController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post', [PostController::class, 'post']);
Route::post('/post', [PostController::class, 'save']);
