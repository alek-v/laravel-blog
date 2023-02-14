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
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>
    <div class="mt-5 mb-5">
        <div x-data="{ open: false }">
            <button @click="open = true" class="btn btn-primary">
                {{ isset($currentCategory) ? $currentCategory->name : 'Category' }}
            </button>

            <div x-show="open" @click.away="open = false" style="display: none;position: absolute;width: 100%;background-color: #fff;">
                <a href="/" class="d-block p-1">All categories</a>
                @foreach($categories as $category)
                    <a href="/categories/{{ $category->slug }}" class="d-block p-1 {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-secondary text-light rounded' : '' }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
