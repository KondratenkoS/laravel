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
<form action="" method="POST">
    @csrf
    <div class="col-md-2 m-lg-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Введите имя" aria-label="Введите имя" aria-describedby="button-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Введите фамилию" aria-label="Введите фамилию" aria-describedby="button-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" placeholder="Введите email" aria-label="Введите email" aria-describedby="button-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="login" placeholder="Введите login" aria-label="Введите login" aria-describedby="button-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="password" placeholder="Введите password" aria-label="Введите password" aria-describedby="button-addon2">
        </div>
        <div>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
        </div>
    </div>
</form>
    <ul>
        @foreach($exclude as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
