<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function __construct(public string $title, public string|int $date, public string $description, public string $body, public string $link) {}

    /**
     * Find article and return content of the article
     *
     * @param string $article
     * @return Post
     */
    public static function find(string $article): Post
    {
        return static::all()->firstWhere('link', $article);
    }

    /**
     * Return all articles
     *
     * @return object
     */
    public static function all(): object
    {
        return cache()->rememberForever('articles.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn ($article) => YamlFrontMatter::parseFile($article))
                ->map(fn ($blog_article) => new Post(
                    $blog_article->title,
                    $blog_article->date,
                    $blog_article->description,
                    $blog_article->body(),
                    $blog_article->link
                ))
                ->sortByDesc('date');
        });
    }
}
