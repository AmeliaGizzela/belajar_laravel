<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' =>'Home']);
});

Route::get('/tenant', function () {
    return view('tenant',['nama'=>'amel'],['title'=>'Title page']);
});
Route::get('/posts', function () {
    return view('posts',['title' => 'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{id}', function ($id) {

    $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});