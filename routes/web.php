<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::post('uploads', [PostController::class, 'uploadImage'])->name('posts.upload');