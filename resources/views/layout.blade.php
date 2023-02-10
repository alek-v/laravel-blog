<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/blog.css" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
    @include('_header')
    <main class="container">
        @yield('featured')
        <div class="row mb-2">
            @yield('featured-post')
            @yield('featured-post')
        </div>
        <div class="d-flex justify-content-around mb-4">
            @yield('blog-card')
            @yield('blog-card')
            @yield('blog-card')
        </div>
    </main> <!-- end of main -->
    @yield('subscription')
    @include('_footer')
</body>
</html>
