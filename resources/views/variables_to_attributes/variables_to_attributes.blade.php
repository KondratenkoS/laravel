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
    <p style="{{ $css_style }}">Этот текст зеленый</p>
    <label>
        <input value="{{ $value1 }}">
        <input value="{{ $value2 }}">
        <input value="{{ $value3 }}">
    </label>
    <p>
        <a href="{{ $href }}">{{ $text }}</a>
    </p>
    <p>
        Дата {{ date('d.m.Y') }}
    </p>
</body>
</html>
