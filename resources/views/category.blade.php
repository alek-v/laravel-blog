{{-- Using yield for layout --}}
@extends('layout')

@section('content')

@foreach ($posts as $post)
    <article>
        <h1>{{ $post->category->name }}</h1>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->description }}</p>
    </article>
    <div>
        <p><a href="/">Main page</a></p>
    </div>
@endforeach

@endsection
