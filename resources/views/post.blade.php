{{-- Using blade components for layout --}}
<x-layout>
    <article>
        <h1>{{ $post_content->title }}</h1>
        <p><a href="/categories/{{ $post_content->category->slug }}">{{ $post_content->category->name }}</a></p>
        <div style="margin: 60px 0px;">{!! $post_content->body !!}</div>
    </article>
    <div>
        <p><a href="/">Main page</a></p>
    </div>
</x-layout>
