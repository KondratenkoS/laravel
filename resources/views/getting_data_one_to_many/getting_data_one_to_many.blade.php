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
    <div>
        @foreach($countries_and_cities as $country)
            <h2>{{ $country->name }}</h2>
            <ul>
                @foreach($country->city as $city)
                    <li>
                        {{ $city->name }}
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</body>
</html>
