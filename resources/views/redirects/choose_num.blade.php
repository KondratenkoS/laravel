<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите число</label>
                <input type="text" class="form-control" name="num" id="exampleInputEmail1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>
    <p><b>Вы ввели число - {{ $num }}</b></p>

</body>
</html>
