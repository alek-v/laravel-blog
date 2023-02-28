<x-layout>
    @include('_posts-header')
    <div class="container">
        <article>
            <h1>{{ $post_content->title }}</h1>
            <x-author-category-button :category="$post_content->category" :author="$post_content->author" />
            <div style="margin: 60px 0px;">{!! $post_content->body !!}</div>
            <section>
                @auth
                    <form method="POST" action="/posts/{{ $post_content->slug }}/comments" class="ms-3 mb-4 p-3 border rounded">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" width="40" height="40" alt="Users avatar" class="rounded" />
                            <p class="ms-4 mb-0">Add a comment</p>
                        </div>
                        <div class="mt-3">
                            <textarea id="comment_text" name="comment_text" rows="5" placeholder="Write a comment here" class="form-control"></textarea>
                        </div>
                        @csrf
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @else
                    <div class="ms-3 mb-4 p-3 border rounded">
                        <p class="mb-0"><a href="/login">Login</a> to post a comment</p>
                    </div>
                @endauth

                @foreach ($post_content->comments as $comment)
                    <x-post-comment :comment="$comment" />
                @endforeach
            </section>
        </article>
    </div>
</x-layout>
