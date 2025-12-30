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
    $posts = Post::with(['author', 'type'])->latest();
    if(request('search')){
        $posts->where('title', 'like', '%' . request('search') . '%')
              ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('posts', [
        'title' => 'Posts',
        'posts' => $posts->paginate(5),
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
    $posts = $user->posts->load('author', 'type');
    return view('posts', ['title' => count($posts) . " Post from " . $user->name, 'posts' => $posts]);
    // return view('posts', ['title' => count($user->posts) . " Post from " . $user->name, 'posts' => $user->posts]);
});

Route::get('/type/{type:name}', function (Type $type) {
    $posts = $type->posts->load('author', 'type');
    return view('posts', ['title' => count($posts) . " Post about " . $type->name, 'posts' => $posts]);
    // return view('posts', ['title' => count($type->posts) . " Post about " . $type->name, 'posts' => $type->posts]);
});
