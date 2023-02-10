<x-layout>
    @include('_posts-header')
    <main class="container">
        <x-featured-post />
        <div class="row mb-2">
            <x-top-blog-posts />
            <x-top-blog-posts />
        </div>
        <div class="d-flex justify-content-around mb-4">
            <x-blog-card />
            <x-blog-card />
            <x-blog-card />
        </div>
    </main> <!-- end of main -->
    <x-subscribe-section />
    @include('_posts-footer')
</x-layout>
