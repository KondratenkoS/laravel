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
    <table style="width:auto">
        <tr>
            <td>ID</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Зарплата</td>
        </tr>
        @foreach($employees as $key => $employee)
            @continue($employee['salary'] <= 2000)
            <tr>
                <td>{{ $key + 1 }}</td>
                @foreach($employee as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>
