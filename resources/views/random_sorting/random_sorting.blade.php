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
    <p>
        @foreach($users_rand as $user)
            {{ $user->name }}
        @endforeach
    </p>
    <p>
            {{ $user_rand->name }}
    </p>
    <p>
        @foreach($users_rand_age as $user)
            {{ $user->name }}
        @endforeach
    </p>
    <p>
            {{ $user_rand_age->name }}
    </p>
</body>
</html>
