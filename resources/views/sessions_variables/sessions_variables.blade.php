<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <p><b>Счетчик обновлений страницы - </b> {{ $counter }}</p>

    <p><b>Время - </b>{{ $time }}</p>

    <p><b>Тут удаленная из сессии - </b>{{ $delete }}</p>

    <p><b>Все переменные в сессии</b>
    <p>{{ $time }}</p>
    <p>{{ $counter }}</p>

    <p><b>Выводим массив из сессии</b></p>
        @foreach($arr as $value)
            <p>{{ $value }}</p>
        @endforeach

    <p><b>Глобальная сессия</b></p>
    <p>{{ $name }}</p>
    <p>{{ $surname }}</p>
    <p>{{ $salary }}</p>

</body>
</html>
