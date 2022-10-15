<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Страница не найдена</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/fav.png">
    @include('front.meta.styles')
</head>

<style>
    body {
        position: fixed;
        width: 100%;
        height: 100%;
        position: relative;
        font-size: 17px;
        line-height: 1.2;
        font-family: Hind, sans-serif;
        top: 0;
        left: 0;
        margin: 200px 0 0;
        display: flex;
        overflow: auto;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    p {
        /* margin: 0; */
    }

    p.big {
        text-align: center;
        font-size: 80px;
        line-height: 75px;
        font-family: "Arial", sans-serif;
        color: #333333;
    }

    p.big:first-child {
        border-bottom: 1px solid #999999;
        margin: 0 auto;
        max-width: 280px;
        font-size: 160px;
        line-height: 140px;
        color: #333333;
    }

    p.big.error {}

    p.text {
        font-family: "Arial", sans-serif;
        margin-top: 15px;
        text-align: center;
        color: #333333;
        margin-bottom: 17px;
    }

    a.big {
        font-size: 36px;
        border-bottom: 1px solid rgba(0, 102, 153, 0.25);
        text-decoration: none;
        color: #006699;
        font-family: "Arial", sans-serif;
    }

    a.big:hover {
        color: red;
        border-bottom: 1px solid red;
    }

    a {}

    p {
        /* text-align: center; */
    }
</style>

<body class="">
    <div class="blackout"></div>
    <div>
        <p class="big">404</p>
        <p class="big error">Ошибка</p>
        <p class="text">Неправильно набран адрес, или такой страницы на сайте больше не существует</p>
        <p style="text-align: center"><a href="/" class="big">На главную</a></p>
    </div>
</body>

</html>
