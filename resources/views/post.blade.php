<x-layout>
    <div class="container">
        <article>
            <h1>{{ $post_content->title }}</h1>
            <x-author-category-button :category="$post_content->category" :author="$post_content->author" />
            <div style="margin: 60px 0px;">{!! $post_content->body !!}</div>
        </article>
        <div>
            <p><a href="/">Main page</a></p>
        </div>
    </div>
</x-layout>
