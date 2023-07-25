<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Members database</h1>

<div style="border: 3px solid black;">
    <h2>Create a New Post</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="post title">
        <textarea name="body" placeholder="body content..."></textarea>
        <button>Save Post</button>
    </form>
</div>
</body>
</html>
