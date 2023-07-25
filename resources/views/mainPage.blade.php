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
    <h2>Create a New Member</h2>
    <form action="/create-member" method="POST">
        @csrf
        <input type="text" name="name" placeholder="players name">
        <input type="text" name="surname" placeholder="players surname">
        <input type="text" name="email" placeholder="players email">
        <input type="date" name="birthDate" placeholder="players birthdate">
        <input type="number" name="playerNumber" placeholder="players Number">
        <button>Save Post</button>
    </form>
</div>



</body>
</html>
