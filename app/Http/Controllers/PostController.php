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

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'description' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');
    }
}
