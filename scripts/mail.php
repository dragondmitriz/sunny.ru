<?php
require_once '../lib/PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['mail']) && isset($_POST['message'])) {
    $email = $_POST['mail'];
    $question = $_POST['message'];
    $name = $_POST['name'];

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage("ru");
//Отключение отладки SMTP.
    $mail->SMTPDebug = 0;
//Задаем для PHPMailer использовать SMTP.
    $mail->isSMTP();
//Устанавливаем имя хоста SMTP
    $mail->Host = "ssl://mail.nic.ru";
//Устанавливаем для этого параметра значение true, если хост SMTP требует аутентификации для отправки почты
    $mail->SMTPAuth = true;
//Предоставляем имя пользователя и пароль
    $mail->Username = "club-sunny@club-sunny.ru";
    $mail->Password = "Makeenko1";
//Устанавливаем порт TCP для подключения
    $mail->Port = 465;
    $mail->From = "club-sunny@club-sunny.ru";
    $mail->FromName = "Обратная связь";
    $mail->addAddress("club-sunny@club-sunny.ru");
    $mail->isHTML(true);
    $mail->Subject = "Обратная связь";
    $mail->Body = $question . '<br><br>' . $name . '<br>' . $email;
    try {
        if (!$mail->send()) {
            die('err');
        } else {
            $message = "Письмо успешно отправлено!";
        }
    } catch (phpmailerException $e) {
        die('err');
    }
}

