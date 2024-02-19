<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
    <table>
        @foreach($users as $user)
            <tr>
                @foreach($user as $item)
                    <td>{{ $item }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>
