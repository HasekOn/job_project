<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Edit Member</h1>
<form action="/edit-member/{{$member->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$member->name}}">
    <input type="text" name="surname" value="{{$member->surname}}">
    <input type="text" name="email" value="{{$member->email}}">
    <input type="date" name="birthDate" value="{{$member->birthDate}}">
    <input type="number" name="playerNumber" value="{{$member->playerNumber}}">
    <button>Save Changes</button>

</form>
</body>
</html>
