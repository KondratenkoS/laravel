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
    <table>
                <tr>
                    <td><b>Login</b></td>
                    <td><b>Password</b></td>
                    <td><b>Name</b></td>
                    <td><b>Surname</b></td>
                    <td><b>Email</b></td>
                </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->profile->name }}</td>
                    <td>{{ $user->profile->surname }}</td>
                    <td>{{ $user->profile->email }}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>
