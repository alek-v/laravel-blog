<x-category-dropdown-menu>
    <x-slot name="trigger">
        <button class="btn btn-primary mb-2">
            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
        </button>
    </x-slot>

    <x-category-dropdown-item href="/" :active="request()->routeIs('home')">All categories</x-category-dropdown-item>

    @foreach($categories as $category)
        <x-category-dropdown-item href="/categories/{{ $category->slug }}" :active="isset($currentCategory) && $currentCategory->is($category)">{{ $category->name }}</x-category-dropdown-item>
    @endforeach
</x-category-dropdown-menu>
