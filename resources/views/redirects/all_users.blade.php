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
            <a class="navbar-brand" href="{{ 'add_user' }}">Добавить пользователя</a>
        </div>
    </nav>
</div>
<div class="m-lg-5">
    <table class="table">
        <thead class="table-secondary">
        <th scope="col">Имя</th>
        <th scope="col">Логин</th>
        <th scope="col">Email</th>
        <th scope="col">Возраст</th>
        <th scope="col">Зарплата</th>
        <th scope="col">Пароль</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Удалить</th>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->salary }}</td>
                <td>{{ $user->password }}</td>
                <td><a href="{{ 'edit'.$user->id }}" class="alert-link" style="color: green">Редактировать</a> </td>
                <td><a href="{{ 'delete'.$user->id }}" class="alert-link" style="color: red">Удалить</a> </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
</body>
<footer>
    <div class="m-lg-5">
        {{ $users->onEachSide(4)->links() }}
    </div>
</footer>
</html>
