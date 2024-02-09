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
    <p>Выбранный город: {{ $city ?? 'Киев'}}</p>
    <h2>Ваша локация</h2>
    <p>Страна: {{ $location['country'] ?? 'Украина'}}</p>
    <p>Город: {{ $location['city'] ?? 'Киев'}}</p>
    <h2>Дата</h2>
    <p>Год:   {{ $date['year'] ?? date('Y') }}</p>
    <p>Месяц: {{ $date['month']  ?? date('M') }}</p>
    <p>День:  {{ $date['day']  ?? date('d') }}</p>
</body>
</html>
