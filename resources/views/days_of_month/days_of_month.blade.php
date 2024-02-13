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
    <h2>Число сегодняшнего дня - </h2>
        {{ $day }}
    <h2>Массив чисел дней месяца - </h2>
    @foreach($day_in_month as $days)
        {{ $days }}
    @endforeach
    <h2>Список дней месяца - </h2>
    <ul>
        @foreach($day_in_month as $days)
            @if($days == $day)
                <li class="active">
            @else
                <li>
            @endif
                {{ $days }}
                </li>
        @endforeach
    </ul>
</body>
</html>
