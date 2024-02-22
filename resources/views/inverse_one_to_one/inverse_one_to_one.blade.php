<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
    <p><b>Профиль и логин/пароль конкретного пользователя</b></p>
    <p><b>Login - </b>{{ $profile->user->login }}</p>
    <p><b>Password - </b>{{ $profile->user->password }}</p>

    <p><b>Профили и логин/пароль всех пользователей</b></p>
    <table>
        <tr>
            <td><b>Login</b></td>
            <td><b>Password</b></td>
            <td><b>Name</b></td>
            <td><b>Surname</b></td>
            <td><b>Email</b></td>
        </tr>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->user->login }}</td>
                <td>{{ $profile->user->password }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->surname }}</td>
                <td>{{ $profile->email }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
