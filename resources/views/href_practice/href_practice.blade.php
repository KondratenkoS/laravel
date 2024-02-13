<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HREF</title>
</head>
<body>
    <ul>
        @foreach($arr as $key)
            <li><a href="http://{{ $key['href'] }}">{{ $key['text'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>
