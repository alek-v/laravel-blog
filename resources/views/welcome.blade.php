<x-layout>
    @include('_posts-header')
    <main class="container">
        <x-posts-grid :posts="$posts" />
    </main> <!-- end of main -->
    <x-subscribe-section />
    @include('_posts-footer')
</x-layout>
