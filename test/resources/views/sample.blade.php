<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li class="m-5">
                <a href="/">Главная</a>
            </li>
            <li>
                <a href="/page1">Страница 1</a>
            </li>
            <li>
                <a href="/page2">Отзывы</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
<script src="/js/app.js"></script>
</html>