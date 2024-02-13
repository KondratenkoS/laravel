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
    <h2>Массив в "value" инпута</h2>
    @foreach($str as $elem)
        <label>
            <input value="{{ $elem }}">
        </label>
    @endforeach

    <h2>Select из массива</h2>
    <label>
        <select>
            @foreach($str as $elem)
                <option>{{ $elem }}</option>
            @endforeach
        </select>
    </label>
</body>
</html>
