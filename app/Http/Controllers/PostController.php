<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(): object
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search']))->paginate(6),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $article): object
    {
        return view('posts.show', [
            'post_content' => $article,
            'categories' => Category::all()
        ]);
    }
}
