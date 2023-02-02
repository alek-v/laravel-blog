<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Blog Post</title>
</head>
<body>
<article>
    <h1><?= $post_content->title; ?></h1>
    <div style="margin: 60px 0px;"><?= $post_content->body; ?></div>
</article>
<a href="/">Main page</a>
</body>
</html>
