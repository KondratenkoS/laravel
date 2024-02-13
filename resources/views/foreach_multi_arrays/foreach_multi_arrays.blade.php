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
    <h2>Выводим массив в виде списка UL</h2>

    <ul>
        @foreach($arr as $value)
            <li>Имя - {{ $value['name'] }}, фамилия - {{ $value['surname'] }}, зарплата - {{ $value['salary'] }}</li>
        @endforeach
    </ul>

    <h2>Выводим массив в виде HTML таблицы</h2>

    <table style="width:100%">
        @foreach($arr as $value)
            <tr>
                @foreach($value as $elem)
                    <td>{{ $elem }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>
