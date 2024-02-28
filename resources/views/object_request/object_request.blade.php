<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form action="{{ route('result') }}">
        <div class="col-md-2 m-lg-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="num1" placeholder="Введите первое число" aria-label="Введите первое число" aria-describedby="button-addon2">
            </div><div class="input-group mb-3">
                <input type="text" class="form-control" name="num2" placeholder="Введите второе число" aria-label="Введите второе число" aria-describedby="button-addon2">
            </div><div class="input-group mb-3">
                <input type="text" class="form-control" name="num3" placeholder="Введите третье число" aria-label="Введите третье число" aria-describedby="button-addon2">
            </div>
            <div>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
            </div>
        </div>
    </form>
    <div>
        Сумма переданных чисел - {{ $sum }}
    </div>
</body>
</html>
