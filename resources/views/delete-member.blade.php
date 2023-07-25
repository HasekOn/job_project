<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="border: 3px solid black;">
<h1>Do you really want to delete member "{{$member['name']}} {{$member['surname']}}" ?</h1>
<br>
<form action="/delete-member/{{$member->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>YES</button>

</form>
<br>
<form action="/delete-member/{{$member->id}}" method="POST">
    @csrf
    @method('PUT')
    <button>NO</button>
</form>
</div>
</body>
</html>
