<x-layout>
    @include('_posts-header')
    <div class="container">
        <article>
            <h1>{{ $post_content->title }}</h1>
            <x-author-category-button :category="$post_content->category" :author="$post_content->author" />
            <div style="margin: 60px 0px;">{!! $post_content->body !!}</div>
            <section>
                <x-post-comment />
                <x-post-comment />
                <x-post-comment />
                <x-post-comment />
            </section>
        </article>
    </div>
</x-layout>
