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
    table, tr, td {
        border:1px solid black;
    }
</style>
<body>
    <table>
        <tr>
            <td><b>Имя</b></td>
            <td><b>Зарплата</b></td>
            <td><b>Возраст</b></td>
            <td><b>Email</b></td>
        </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->salary }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>
