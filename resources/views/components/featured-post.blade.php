@props(['post'])
<div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">{{ $post->title }}</h1>
        <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in category <strong><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></strong></p>
        <p>Published: {{ $post->created_at->diffForHumans() }}</p>
        <p class="lead my-3">{{ $post->description }}</p>
        <p class="lead mb-0"><a href="/posts/{{ $post->slug }}" class="text-white fw-bold">Continue reading...</a></p>
    </div>
</div>
