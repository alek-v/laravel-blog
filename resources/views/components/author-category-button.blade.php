@props(['category', 'author'])

<p>By <a href="/authors/{{ $author->username }}" style="font-weight: bold;">{{ $author->name }}</a> in <a href="/categories/{{ $category->slug }}" style="font-weight: bold;">{{ $category->name }}</a></p>
