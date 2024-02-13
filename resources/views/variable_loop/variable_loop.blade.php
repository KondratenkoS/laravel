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
    <h2>Выводим в виде списка</h2>
    <ul>
        @foreach($arr as $elem)
            @if($loop->first)
                <li class="first">{{ $loop->index + 1 }} - {{ $elem }}</li>
            @elseif($loop->last)
                <li class="last">{{ $loop->index + 1 }} - {{ $elem }}</li>
            @else
                <li>{{ $loop->index + 1 }} - {{ $elem }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Выводим в виде - жирный и курсив</h2>
    @foreach($arr as $elem)
        @if($loop->remaining < 3)
            <p><i>{{ $elem }}</i></p>
        @else
            <p><b>{{ $elem }}</b></p>
        @endif
    @endforeach

</body>
</html>
