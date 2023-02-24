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

        @if (session()->has('success'))
            <div class="fixed-top d-flex justify-content-center text-bg-success p-3 m-3 rounded w-25">
                <p>{{ session('success') }}</p>
            </div>
        @endif
</x-layout>
