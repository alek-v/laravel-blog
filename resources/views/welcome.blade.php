<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Laravel Blog</title>
</head>
<body>
    <h1>Hello Laravel</h1>
    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->link }}">{{ $post->title }}</a></h2>
            <p>{{ $post->description }}</p>
        </article>
    @endforeach
</body>
</html>
