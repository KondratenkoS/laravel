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
    @foreach($users_in as $user)
        <p><b>Юзеры с id, равными 1, 2, 3 и 5 - </b>{{ $user->name }}</p>
    @endforeach

    @foreach($users_not_in as $user)
        <p><b>Юзеры с id, не равными 1, 2, 3 и 5 - </b>{{ $user->name }}</p>
    @endforeach
</body>
</html>
