<div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Laravel Blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <form method="GET" action="" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" name="search" class="form-control form-control-light" placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </div>
    </header>
    <div class="mt-5 mb-5">
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
    </div>
</div>
