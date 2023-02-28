@props(['comment'])

<article class="d-flex m-3 p-4 bg-light rounded">
    <div>
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" width="60" height="60" alt="Users avatar" class="rounded" />
    </div>
    <div class="d-flex flex-column ms-3">
        <p><strong>{{ $comment->author->name }}</strong><br /><span class="fw-light">{{ $comment->created_at->diffForHumans() }}</span></p>
        <p>{{ $comment->body }}</p>
    </div>
</article>
