{{-- Using yield for layout --}}
@extends('layout')

@section('content')

<h1>Hello Laravel</h1>
@foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> in category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->description }}</p>
    </article>
@endforeach

@endsection
