<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs/create', function () {
    return view('posts.create');
});

Route::get('/write-blog', function () {
    return view('posts.create');
});

Route::get('/show-featured-posts', function () {
    return view('components.sections.featured-posts');
});
Route::get('/blogs', function () {


    $posts = config('posts');

    return view('posts.index', compact('posts'));
});

Route::get('/blogs/{id}', function ($id) {

    $posts = config('posts');

    $post = collect($posts)->firstWhere('id', (int) $id);

    return view('posts.show', compact('post'));
});
