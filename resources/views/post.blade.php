{{-- Using blade components for layout --}}
<x-layout>
    <article>
        <h1>{{ $post_content->title }}</h1>
        <p> {{ $post_content->category->name }}</p>
        <div style="margin: 60px 0px;">{!! $post_content->body !!}</div>
    </article>
    <a href="/">Main page</a>
</x-layout>
