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
        @foreach($arr as $elem)
            @if(!($elem & 1))
                {{ $elem }}
            @endif
        @endforeach

    <h2>Проверяем переменную - это массив или число</h2>
        @if(is_array($data))
            <ul>
                @foreach($data as $elem)
                    <li>{{ $elem }}</li>
                @endforeach
            </ul>
        @elseif(!is_array($data))
            <p>{{ $data }}</p>
        @endif
</body>
</html>
