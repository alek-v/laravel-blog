@props(['post'])

<div {{ $attributes->merge(['class' => '']) }}>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-400 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></strong>
            <h3 class="mb-0">{{ $post->title }}</h3>
            <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
            <p class="card-text mb-auto">{{ $post->description }}</p>
            <a href="/posts/{{ $post->slug }}" class="stretched-link">Continue reading</a>
        </div>
    </div>
</div>
