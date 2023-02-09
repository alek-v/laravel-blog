<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;


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
    // Select all post and their categories
    return view('welcome', ['posts' => Post::latest()->with('category', 'author')->get()]);
});

Route::get('posts/{article:slug}', function (Post $article) {
    return view('post', ['post_content' => $article]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', ['posts' => $category->posts]);
});
