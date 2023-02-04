<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $all_articles = Post::all();

    return view('welcome', ['posts' => $all_articles]);
});

Route::get('/posts/{article:slug}', function (Post $article) {
    return view('post', ['post_content' => $article]);
});
