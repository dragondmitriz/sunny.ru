<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="description" content='Центр интеллектуального развития "Солнышко"'/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link href="css/payment.css" rel="stylesheet"/>
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
    <div class="payment">
        <ul>
            <li>Оплачиваются 8 занятий в месяц</li>
            <li>9-е и 10-е занятия считаются бонусными</li>
            <li>Оплата производится до 15 числа текущего месяца</li>
            <li>В случае пропуска занятий, на следующий месяц производится перерасчет 50% стоимости пропущенных
                занятий
            </li>
        </ul>
        <table>
            <tr>
                <th>Название групповых занятий</th>
                <th>Продолжительность занятий</th>
                <th>Стоимость</th>
            </tr>
            <tr>
                <td rowspan="2">«Развивалочка»</td>
                <td>40 мин.</td>
                <td>3500р. в месяц</td>
            </tr>
            <tr>
                <td>1 час</td>
                <td>3900р. в месяц</td>
            </tr>
            <tr>
                <td>«Подготовка к школе»</td>
                <td>2 часа</td>
                <td>4300р. в месяц</td>
            </tr>
            <tr>
                <td rowspan="2">«Художественная лепка»</td>
                <td>40 мин.</td>
                <td>450р. разовая оплата</td>
            </tr>
            <tr>
                <td>1 час</td>
                <td>500р. разовая оплата</td>
            </tr>
            <tr>
                <th>Название индивидуальных занятий</th>
                <th>Продолжительность занятий</th>
                <th>Стоимость</th>
            </tr>
            <tr>
                <td>«Подготовка к школе»</td>
                <td>1 час</td>
                <td>1000р. разовая оплата</td>
            </tr>
            <tr>
                <td>«Обучение чтению»</td>
                <td>30 мин.</td>
                <td>500р. разовая оплата</td>
            </tr>
            <tr>
                <td>«Помощь школьнику 1 4 кл.»<br>(ликвидация пробелов в знаниях)</td>
                <td>1 час</td>
                <td>1000р. разовая оплата</td>
            </tr>
        </table>
    </div>
</main>
<?php require "contactsCorner.html"; ?>
</body>
</html>