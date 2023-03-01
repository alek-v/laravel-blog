<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
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

Route::post('newsletter', function() {
    request()->validate([
        'email_address' => 'required|email'
    ]);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

    try {
        $mailchimp->lists->addListMember("8988da347c", [
            "email_address" => request('email_address'),
            "status" => "subscribed",
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
           'email_address' => 'Email could not be added to our newsletter list.'
        ]);
    }

    return redirect('/')->with('success', 'You are now subscribed to the our newsletter list.');
});

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

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
