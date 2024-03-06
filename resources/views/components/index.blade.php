<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><x-title.title /></title>

</head>
<body>

    <div class="wrapper">

        <x-header.header />
        <x-main.menu.nav />

        <x-info.info>
            Переданная информация в компонент info
            Переданная информация в компонент info
            Переданная информация в компонент info
        </x-info.info>

        <x-left_sidebar />
        <x-right_sidebar />
        <x-sidebar.info-block />
        <x-sidebar.left.info-block />

        <x-footer.footer />
        <x-footer.info />
        <x-footer.info-block />
    </div>

    <x-footer />

</body>
</html>
