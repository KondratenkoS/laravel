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
    <table style="width:30%">
        <tr>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Статус</td>
        </tr>
        @foreach($users as $user)
            @if($user['banned'])
                <tr style="color: red">
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['surname'] }}</td>
                    <td>{{ $user['banned'] = 'Забанен' }}</td>
            @else
                <tr style="color: green">
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['surname'] }}</td>
                    <td>{{ $user['banned'] = 'Активен' }}</td>
            @endif
            </tr>
        @endforeach
    </table>
</body>
</html>
