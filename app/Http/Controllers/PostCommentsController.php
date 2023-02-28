<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
           'comment_text' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('comment_text')
        ]);

        return back();
    }
}
