{{-- Using yield for layout --}}
@extends('layout')

@section('content')

<h1>Hello Laravel</h1>
@foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By {{ $post->author->name }} in category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->description }}</p>
    </article>
@endforeach

@endsection
