<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="description" content='Центр интеллектуального развития "Солнышко"'/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link href="css/index.css" rel="stylesheet"/>
    <link href="css/top.css" rel="stylesheet"/>
    <link href="css/menu.css" rel="stylesheet"/>
    <link href="css/banner.css" rel="stylesheet"/>
    <link href="css/contactsCorner.css" rel="stylesheet"/>
    <link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
    <title>Солнышко</title>
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
    <div class="index">
        <ul>
            <li>Развитие памяти, внимания</li>
            <li>Формирование коммуникативных навыков</li>
            <li>Развитие мелкой и общей моторики</li>
            <li>Творческая самореализация ребенка</li>
            <li>Развитие усидчивости, зрительного восприятия</li>
            <li>Развитие логического и образного мышления, интеллекта, памяти</li>
            <li>Формирование способности к социальному взаимодействию</li>
            <li>Расширение кругозора</li>
            <li>Развитие творческих способностей, фантазии</li>
        </ul>
        <div class="lessons">
            <div class="lessonsRow">
                <a id='lesson1' class="lessonLeft" href='lessons.php#lesson1'">Ранее развитие (1,6-2 года)
                "Развивалочка"</a>
                <a id='lesson2' class="lessonRight" href='lessons.php#lesson2'">Ритмопластика (2-3 лет)</a>
            </div>
            <div class="lessonsRow">
                <a id='lesson4' class="lessonLeft" href='lessons.php#lesson4'">Подготовка к школе (5-7 лет)</a>
                <a id='lesson3' class="lessonRight" href='lessons.php#lesson3'">Развивающие игры (3-4 года)</a>
            </div>
            <div class="lessonsRow">
                <a id='lesson6' class="lessonLeft" href='lessons.php#lesson6'">Чтение (5-7 лет)</a>
                <a id='lesson5' class="lessonRight" href='lessons.php#lesson5'">Художественная лепка (с 3-х лет)</a>
            </div>
            <div class="lessonsRow">
                <a id='lesson7' class="lessonLeft" href='lessons.php#lesson7'">Помощь школьнику (1-4 класс)</a>
                <a id='lesson8' class="lessonRight" href='lessons.php#lesson8'">Информатика (с 13 лет)</a>
            </div>
        </div>
    </div>
    <aside>
        <?php require "banner.php"; ?>
    </aside>
</main>
<?php require "contactsCorner.html"; ?>
</body>
</html>