<div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                @auth
                    <span>Welcome back, {{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="mt-2">
                        @csrf
                        <button type="submit" class="btn btn-primary">Log Out</button>
                    </form>
                @else
                    <a href="/login" class="link-secondary m-3">Log In</a>
                    <a href="/register" class="link-secondary">Register</a>
                @endauth
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Laravel Blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <form method="GET" action="/" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" name="search" class="form-control form-control-light" placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </div>
    </header>
</div>
