@props(['posts'])

@if ($posts->count())
    <x-featured-post :post="$posts[0]"/>
    <div class="row mb-2">
        @foreach($posts->skip(1) as $post)
            <x-top-blog-posts :post="$post" class="{{ $loop->iteration < 3 ? 'col-md-6' : 'col-md-4' }}" />
        @endforeach
    </div>
@else
    <div class="row mb-2">
        <p>No posts yet. Come back later.</p>
    </div>
@endif
