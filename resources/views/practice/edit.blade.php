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
<div class="m-lg-5">
    <nav class="navbar navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ 'show' }}">На главную</a>
        </div>
    </nav>
</div>

<div class="m-lg-5">
    <form method="post" action="">
        @csrf
        @foreach($users as $user)
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Измените имя</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Измените Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="age" class="col-sm-2 col-form-label">Измените возраст</label>
            <div class="col-sm-10">
                <input type="number" name="age" class="form-control" id="age" value="{{ $user->age }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="salary" class="col-sm-2 col-form-label">Измените зарплату</label>
            <div class="col-sm-10">
                <input type="number" name="salary" class="form-control" id="salary" value="{{ $user->salary }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="login" class="col-sm-2 col-form-label">Измените логин</label>
            <div class="col-sm-10">
                <input type="text" name="login" class="form-control" id="login" value="{{ $user->login }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Измените пароль</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" value="{{ $user->password }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        @endforeach
    </form>
</div>

</body>
</html>
