<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="description" content='Центр интеллектуального развития "Солнышко"'/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link href="css/faq.css" rel="stylesheet"/>
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
    <div class="faq">
        <!--<h1>Часто задаваемые вопросы:</h1>
        <div class="question">Вопрос</div>
        <div class="answer">Ответ</div>-->
        <form id="faq-form" method="POST">
            <input id="input_name" type="text" name="name" maxlength="25"
                   placeholder="Ваше имя"/><span></span>
            <input id="input_mail" type="email" name="mail" maxlength="100"
                   placeholder="Ваш адрес электронной почты"/><span></span>
            <textarea id="input_quastion" name="question" maxlength="1000"
                      placeholder="Ваше сообщение"></textarea><span></span>
            <input id="input_submit" type="submit" value="Отправить сообщение"><span></span>
        </form>
    </div>
</main>
<?php require "contactsCorner.html"; ?>

<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $('.question').click(function () {
        let new_active_answer$ = $(this).next('.answer');
        let active_answer$ = $('#active_answer');
        if (new_active_answer$.attr('id') != 'active_answer') {
            active_answer$.slideUp(300);
            active_answer$.attr('id', '');
            new_active_answer$.slideToggle(600);
            new_active_answer$.attr('id', 'active_answer');
        }
        else {
            active_answer$.slideUp(300);
            active_answer$.attr('id', '');
        }
    });

    $('#faq-form').submit(function () {
        $.ajax('scripts/mail.php', {
            method: 'POST',
            dataType: 'json',
            data: $('#faq-form').serialize(),
            succes: function () {

            },
            error: function () {

            },
            beforeSend: function () {

            }
        });
        return false;
    });
</script>
</body>
</html>
