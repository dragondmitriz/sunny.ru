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
<body class="background">
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
                <a href='lessons.php#lesson1'">Ранее развитие (1,6-2 года) "Развивалочка"</a>
                <a href='lessons.php#lesson2'">Ритмопластика (2-3 лет)</a>
            </div>
            <div class="lessonsRow">
                <a href='lessons.php#lesson4'">Подготовка к школе (5-7 лет)</a>
                <a href='lessons.php#lesson3'">Развивающие игры (3-4 года)</a>
            </div>
            <div class="lessonsRow">
                <a href='lessons.php#lesson6'">Чтение (5-7 лет)</a>
                <a href='lessons.php#lesson5'">Художественная лепка (с 3-х лет)</a>
            </div>
            <div class="lessonsRow">
                <a href='lessons.php#lesson7'">Помощь школьнику (1-4 класс)</a>
                <a href='lessons.php#lesson8'">Информатика</a>
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