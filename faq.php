<?php
  require_once 'lib/PHPMailer/PHPMailerAutoload.php';
  $message=null;
  if (isset($_POST['mail']) && isset($_POST['question']))
  {
    $question=$_POST['question'];
    $question=wordwrap($question,70,'\r\n');
    $mail = new PHPMailer;
    // Настройка
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = "ssl://smtp.mail.com";
    $mail->Port = 465;
    $mail->Username = "sunny.education_center@mail.ru";
    $mail->Password = "Makeenko1";
    // От кого
    $mail->setFrom($_POST['mail']);
    // Кому
    $mail->addAddress('sunny.education_center@mail.ru', '');
    // Тема письма
    $mail->Subject = 'Вопрос';
    // Тело письма
    $mail->msgHTML($question);
    // Отправка
    if ($mail->send())
    {
      $message='Вопрос успешно отправлен к нам. Ожидайте ответа на указанном вами почтовом ящике.';
    }
    else
    {
      $message='Возникла ошибка при отправке вопроса. Проверьте интернет-соденение и корректность введенных данных.';
    }
  }
?>

<html class="background">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/faq.css" rel="stylesheet" type="text/css" />
		<link href="css/theme.css" rel="stylesheet" type="text/css" />
		<link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
		<title>Вопросы</title>
    <script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
  	<script type="text/javascript">
      $(document).ready(function()
      {
  			$('.question').click(function(){
  				var active_answer=$(this).next('.answer');
  				if (active_answer.attr('id')!='active_answer')
  				{
  					$('#active_answer').slideUp(300);
  					$('#active_answer').attr('id','');
  					active_answer.slideToggle(600);
  					active_answer.attr('id','active_answer');
  				}
  				else
  				{
  					$('#active_answer').slideUp(300);
  					$('#active_answer').attr('id','');
  				}
  			});
  		});
  	</script>
  </head>
<body>
  <div name="top" class=top>
    <?php
      require "top.html";
    ?>
  </div>
  <div name="menu" class="menu">
    <?php
      require "menu.html";
    ?>
  </div>
  <div class="content">
    <?php
      $file_index=0;
      while(file_exists("content//faq//".++$file_index.".txt"))
      {
        $file=fopen("content//faq//".$file_index.".txt",r);
        $question=fgets($file);
        $answer=fgets($file);
        fclose($file);
        print "<div class='question'>".$file_index.". ".$question."</div>";
        print "<div class='answer'>".$answer."</div>";
      }
    ?>
    <form method="POST">
      <?php
        print $message;
      ?>
      <div>Ваш почтовый адрес: </div><input class="input_mail" type="email" name="mail" maxlength="100"/><br/>
      <div>Ваш вопрос: </div><textarea class="input_quastion" type="text" name="question" maxlength="1000"></textarea><br/>
      <input class="input_submit" type="submit" value="Задать вопрос">
    </form>
  </div>
</body>
</html>
