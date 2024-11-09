<?php

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
Route::get('/blog', function () {
    return view('blog',['title' => 'Blog']);
});

