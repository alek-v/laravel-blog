<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminPostController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{article:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('author', [
        'posts' => $author->posts
    ]);
});

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::get('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::middleware('can:administrator')->group(function () {
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::post('admin/posts/create', [AdminPostController::class, 'store']);
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
    // Route::resource('admin/posts', AdminPostController::class)->except('show');
});
