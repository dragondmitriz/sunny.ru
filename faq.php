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
            <div class="containElements">
                <input id="input_name" type="text" name="name" maxlength="25" placeholder="Ваше имя"/>
            </div>
            <div class="containElements">
                <input id="input_mail" type="email" name="mail" maxlength="100"
                       placeholder="Ваш адрес электронной почты (обязательно)"/>
            </div>
            <div class="containElements">
                <textarea id="input_message" name="message" maxlength="1000"
                          placeholder="Ваше сообщение (обязательно)"></textarea>
            </div>
            <div class="containElements">
                <input id="input_submit" type="submit" value="Отправить сообщение">
                <span></span>
            </div>
        </form>
    </div>
</main>
<?php require "contactsCorner.html"; ?>

<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript">

    function is_correctInput(str) {
        return !((!str) || (str.length < 3));
    }

    function is_correctName(str) {
        return !/[^А-Яа-я\w\s-]/.test(str);
    }

    function is_correctMail(str) {
        return /^[\w-.]+@[\w-]+\.[a-z]{2,4}$/i.test(str);
    }

    $(document).ready(function () {

        $('.question').click(function () {
            let new_active_answer$ = $(this)
                .next('.answer');
            let active_answer$ = $('#active_answer');
            if (new_active_answer$.attr('id') !== 'active_answer') {
                active_answer$
                    .slideUp(300)
                    .attr('id', '');
                new_active_answer$
                    .slideToggle(600)
                    .attr('id', 'active_answer');
            }
            else {
                active_answer$
                    .slideUp(300)
                    .attr('id', '');
            }
        });

        $('#input_name').on("change", function () {
            let inputName$ = $(this);
            let name = inputName$.val().toString().trim();
            if ((is_correctInput(name)) && (is_correctName(name))) {
                inputName$
                    .removeClass('inputUncorrect')
                    .addClass('inputCorrect');
            }
            else {
                inputName$
                    .removeClass('inputCorrect')
                    .addClass('inputUncorrect')
                    .attr('title', "Имя должно содержать только буквы, цифры, пробелы и дефис. Проверьте наличие лишних символов.");
            }
        });

        $('#input_mail').on("change", function () {
            let inputMail$ = $(this);
            let mail = inputMail$.val().toString().trim();
            if ((is_correctInput(mail)) && (is_correctMail(mail))) {
                inputMail$
                    .removeClass('inputUncorrect')
                    .addClass('inputCorrect');
            }
            else {
                inputMail$
                    .removeClass('inputCorrect')
                    .addClass('inputUncorrect');
            }
        });

        $('#input_message').on("change", function () {
            let inputMessage$ = $(this);
            let message = inputMessage$.val().toString().trim();
            if (is_correctInput(message)) {
                inputMessage$
                    .removeClass('inputUncorrect')
                    .addClass('inputCorrect');
            }
            else {
                inputMessage$
                    .removeClass('inputCorrect')
                    .addClass('inputUncorrect');
            }
        });

        $('#faq-form').submit(function () {
            let err = false;
            let inputName$, inputMail$, inputMessage$;
            let name, mail, message;
            inputName$ = $('#input_name');
            inputMail$ = $('#input_mail');
            inputMessage$ = $('#input_message');
            name = inputName$.val().toString().trim();
            mail = inputMail$.val().toString().trim();
            message = inputMessage$.val().toString().trim();
            if (is_correctInput(name)) {
                if (is_correctName(name)) {
                    inputName$
                        .addClass('inputCorrect')
                        .removeClass('inputUncorrect');
                }
                else {
                    err = true;
                    inputName$
                        .addClass('inputUncorrect')
                        .removeClass('inputCorrect')
                        .attr('title', "Имя должно содержать только буквы, цифры, пробелы и дефис. Проверьте наличие лишних символов.");
                }
            }
            if ((is_correctInput(mail)) && (is_correctMail(mail))) {
                inputMail$
                    .removeClass('inputUncorrect')
                    .addClass('inputCorrect');
            }
            else {
                err = true;
                inputMail$
                    .removeClass('inputCorrect')
                    .addClass('inputUncorrect');
            }
            if (is_correctInput(message)) {
                inputMessage$
                    .removeClass('inputUncorrect')
                    .addClass('inputCorrect');
            }
            else {
                err = true;
                inputMessage$
                    .removeClass('inputCorrect')
                    .addClass('inputUncorrect');
            }
            if (!err) {
                $.ajax('scripts/mail.php', {
                    method: 'POST',
                    dataType: 'html',
                    data: {name, mail, message},
                    success: function (response) {
                        if (response === 'err') {
                            //ошибка
                            $('#input_submit').next()
                                .removeClass('spanCorrect')
                                .removeClass('spanProgress')
                                .addClass('spanError')
                                .text('Ошибка отправки сообщения! Проверьте интернет-соединение.');
                        } else {
                            $('#input_submit').next()
                                .removeClass('spanError')
                                .removeClass('spanProgress')
                                .addClass('spanCorrect')
                                .text('');
                        }
                    },
                    error: function (jqXHR, exception) {
                        let message;
                        if (jqXHR.status === 0) {
                            message = 'Отсутствует интернет-соединение.';
                        } else if (jqXHR.status == 404) {
                            message = 'НЕ найдена страница запроса [404])';
                        } else if (jqXHR.status == 500) {
                            message = 'НЕ найден домен в запросе [500].';
                        } else if (exception === 'parsererror') {
                            message = "Ошибка в коде: \n" + jqXHR.responseText + " Пожалуйста, сообщите об данной ошибке по whatsapp: +7(915)472-13-52";
                        } else if (exception === 'timeout') {
                            message = 'Сервер не отвечает';
                        } else if (exception === 'abort') {
                            message = 'Прерван запрос.';
                        } else {
                            message = 'Неизвестная ошибка:\n' + jqXHR.responseText;
                        }
                        $('#input_submit').next()
                            .removeClass('spanCorrect')
                            .removeClass('spanProgress')
                            .addClass('spanError')
                            .text(message);
                    },
                    beforeSend: function () {
                        $('#input_submit').next()
                            .removeClass('spanCorrect')
                            .removeClass('spanError')
                            .addClass('spanProgress')
                            .text('');
                    }
                });
            }
            return false;
        });

    })
    ;
</script>
</body>
</html>
