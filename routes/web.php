<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Type;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => Post::all()
    ]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{post:id}', function (Post $post) {
    // $post = Post::find($id);
return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $post = Post::find($id);
return view('posts', ['title' => "Post from " . $user->name, 'posts' => $user->posts]);
});

Route::get('/type/{type:name}', function (Type $type) {
    // $post = Post::find($id);
return view('posts', ['title' => "Post from " . $type->name, 'posts' => $type->posts]);
});
