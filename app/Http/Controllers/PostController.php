<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    public function index(): object
    {
        // Select all post and their categories
        $posts = Post::latest();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('welcome', [
            'posts' => $posts->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $article): object
    {
        return view('post', [
            'post_content' => $article,
            'categories' => Category::all()
        ]);
    }
}
