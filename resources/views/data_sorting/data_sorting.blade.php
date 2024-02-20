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
    <p><b>Юзеры отсортированы по возрастанию возраста</b></p>
        @foreach($users as $user)
            <p>{{ $user->age }}</p>
        @endforeach
    <p><b>Юзеры отсортированы по уменьшению возраста</b></p>
    @foreach($user_desc as $user)
        <p>{{ $user->age }}</p>
    @endforeach
</body>
</html>
