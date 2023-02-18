<x-layout>
    @include('_posts-header')
    <main class="container">
        <div class="mt-5 mb-5">
            <x-category-dropdown />
        </div>
        <x-posts-grid :posts="$posts" />

        {{ $posts->links() }}
    </main> <!-- end of main -->
    <x-subscribe-section />
</x-layout>
