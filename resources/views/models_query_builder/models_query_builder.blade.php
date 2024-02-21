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
    <p><b>Пользователи возрастом 30 лет</b></p>
        @foreach($users_age as $user)
            <p>{{ $user->name }}</p>
        @endforeach

    <p><b>Пользователи c зарплатой в диапазоне 1000 - 3000</b></p>
        @foreach($users_salary as $user)
            <p>{{ $user->name }}</p>
        @endforeach

    <p><b>Пользователи начиная с 4-го</b></p>
        @foreach($users_skip as $user)
            <p>{{ $user->name }}</p>
        @endforeach

    <p><b>Пользователи начиная с 4-го в количестве 5-ть штук</b></p>
        @foreach($users_skip_take as $user)
            <p>{{ $user->name }}</p>
        @endforeach

    <p><b>Пользователи с id 1, 2, 3, 5</b></p>
        @foreach($users_by_id as $user)
            <p>{{ $user->name }}</p>
        @endforeach
</body>
</html>
