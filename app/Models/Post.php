<?php

namespace App\Models;

class Post
{
    /**
     * Find article and return content of the article
     *
     * @param string $article
     * @return string
     */
    public static function find(string $article): string
    {
        if (!file_exists($path = resource_path("/posts/{$article}.html"))) abort(404);

        return cache()->remember("posts.{$article}", 5, fn () => file_get_contents($path));
    }
}
