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
    <p>Ваше имя: {{ $worker['name'] }}</p>
    <p>Ваш возраст: {{ $worker['age'] }}</p>
    <p>Ваша зарплата: {{ $worker['salary'] }}</p>

    <h3>Сумма чисел и количество элементов в массиве:</h3>

    <p>Количество элементов: {{ count($nums) }}</p>
    <p>Сумма элементов: {{ array_sum($nums) }}</p>
</body>
</html>
