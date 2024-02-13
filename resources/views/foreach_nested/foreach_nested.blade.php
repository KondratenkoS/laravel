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

        <h2>Таблица собрана из двухмерного массива чисел</h2>

        <table style="width:100%">
            <tr>
                @foreach($arr as $value)
                    @foreach($value as $elem)
                        <td>{{ $elem }}</td>
                    @endforeach
                @endforeach
            </tr>
        </table>
    </body>
</html>
