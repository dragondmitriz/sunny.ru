<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='Расписание Занятий в Центре интеллектуального развития "Солнышко"'/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link href="css/timetable.css" rel="stylesheet"/>
    <link href="css/top.css" rel="stylesheet"/>
    <link href="css/menu.css" rel="stylesheet"/>
    <link href="css/banner.css" rel="stylesheet"/>
    <link href="css/contactsCorner.css" rel="stylesheet"/>
    <link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
    <title>Расписание занятий</title>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(55363147, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/55363147" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<header>
    <?php require "top.html"; ?>
</header>
<main>
    <nav>
        <?php require "menu.html"; ?>
    </nav>
    <div class="timetable">
        <ul>
            <li>Занятия «Развивалочка» и «Подготовка к школе» проводятся 2 раза в неделю</li>
            <li>Занятия «Художественная лепка» проводятся 1 раз в неделю</li>
        </ul>
        <table cellspacing="0">
            <tr>
                <th>Дни недели</th>
                <th>Название занятий</th>
                <th>Возрастная<br>группа</th>
                <th>Время занятий</th>
                <th>Продолжительность<br>занятий</th>
            </tr>
            <tr>
                <td rowspan="4">Понедельник<br> Среда</td>
                <td rowspan="3">«Развивалочка»</td>
                <td>1,6 лет</td>
                <td>10:00-10:40</td>
                <td>40 мин.</td>
            </tr>
            <tr>
                <td>2 года</td>
                <td>10:50-11:30</td>
                <td>40 мин.</td>
            </tr>
            <tr>
                <td>4 года</td>
                <td>18:40-19:40</td>
                <td>1 час.</td>
            </tr>
            <tr>
                <td>«Подготовка к школе»</td>
                <td>6 лета</td>
                <td>16:30-18:30</td>
                <td>2 часа</td>
            </tr>
            <tr class="row_space">
                <td rowspan="4">Вторник<br>Пятница</td>
                <td rowspan="2">«Развивалочка»</td>
                <td>3 года</td>
                <td>10:30-11:30</td>
                <td>1 час</td>
            </tr>
            <tr>
                <td>6 лет</td>
                <td>11:40-13:40</td>
                <td>2 часа</td>
            </tr>
            <tr>
                <td rowspan="2">«Подготовка к школе»</td>
                <td>5 лет</td>
                <td>16:30-18:30</td>
                <td>2 часа</td>
            </tr>
            <tr>
                <td>6 лет</td>
                <td>18:40-20:40</td>
                <td>2 часа</td>
            </tr>
            <tr class="row_space">
                <td rowspan="2">Суббота</td>
                <td rowspan="2">«Художественная лепка»</td>
                <td>3-4 года</td>
                <td>12:00-12:40</td>
                <td>40 мин.</td>
            </tr>
            <tr>
                <td>с 5 лет</td>
                <td>13:00-14:00</td>
                <td>1 час</td>
            </tr>
        </table>
    </div>
</main>
<?php require "contactsCorner.html"; ?>
</body>
</html>