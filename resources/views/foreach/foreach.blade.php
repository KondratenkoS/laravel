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
    <h2>Список элементов массива</h2>
        <ul>
            @foreach($arr as $elem)
                <li>{{ $elem }}</li>
            @endforeach
        </ul>
    <h2>Список квадратов элементов массива</h2>
        <ul>
            @foreach($arr as $elem)
                <li>{{ pow($elem, 2) }}</li>
            @endforeach
        </ul>
    <h2>Список квадратных корней элементов массива</h2>
        <ul>
            @foreach($arr as $elem)
                <li>{{ sqrt($elem) }}</li>
            @endforeach
        </ul>
    <h2>Список ключей и значений элементов массива</h2>
        <ul>
            @foreach($str as $key => $value)
                <li>Ключ: {{ $key }}, значение: {{ $value }}</li>
            @endforeach
        </ul>
    <h2>Список ключей и значений элементов массива, плюсуем 1 к ключу</h2>
        <ul>
            @foreach($str as $key => $value)
                <li>Ключ: {{ $key + 1 }}, значение: {{ $value }}</li>
            @endforeach
        </ul>
</body>
</html>
