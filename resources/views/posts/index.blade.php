<x-layout>
    @include('_posts-header')
    <main class="container">
        <x-posts-grid :posts="$posts" />

        {{ $posts->links() }}
    </main> <!-- end of main -->
    <x-subscribe-section />
</x-layout>
