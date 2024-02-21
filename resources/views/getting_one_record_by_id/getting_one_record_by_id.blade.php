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
    <p><b>Пользователь под id = 3</b></p>
        <p><b>Имя - </b>{{ $user->name }}</p>
        <p><b>Возраст - </b>{{ $user->age }}</p>
        <p><b>Зарплата - </b>{{ $user->salary }}</p>
        <p><b>Email - </b>{{ $user->email }}</p>
    <p><b>Пользователи под id = 3, 4, 5</b></p>
        @foreach($users as $user)
            <p><b>Имя - </b>{{ $user->name }}</p>
            <p><b>Возраст - </b>{{ $user->age }}</p>
            <p><b>Зарплата - </b>{{ $user->salary }}</p>
            <p><b>Email - </b>{{ $user->email }}</p>
        @endforeach
</body>
</html>
