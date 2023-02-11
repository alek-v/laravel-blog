<x-layout>
    @foreach ($posts as $post)
        <article>
            <p><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></p>
            <p>By <a href="{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->description }}</p>
        </article>
    @endforeach

    <div>
        <p><a href="/">Home page</a></p>
    </div>
</x-layout>
