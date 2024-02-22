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
    <p><b>Login - </b>{{ $users->login }}</p>
    <p><b>Password - </b>{{ $users->password }}</p>
    <p><b>Имя - </b>{{ $users->profile->name }}</p>
    <p><b>Фамилия - </b>{{ $users->profile->surname }}</p>
    <p><b>Email - </b>{{ $users->profile->email }}</p>

</body>
</html>
