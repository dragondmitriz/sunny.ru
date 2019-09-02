<html class="background">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/applications.css" rel="stylesheet" type="text/css" />
		<link href="css/theme.css" rel="stylesheet" type="text/css" />
		<link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
		<title>Запись</title>
    <script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
  	<script type="text/javascript">
      $(document).ready(function()
      {
				$('#gr1').attr('selected','selected');

  			$('#gr1').click(function(){
  				$(".image1").attr({src: 'content\\applications\\gr1\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\gr1\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\gr1\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\gr1\\4.jpg'});
  			});
        $('#gr2').click(function(){
  				$(".image1").attr({src: 'content\\applications\\gr2\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\gr2\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\gr2\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\gr2\\4.jpg'});
  			});
        $('#gr3').click(function(){
  				$(".image1").attr({src: 'content\\applications\\gr3\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\gr3\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\gr3\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\gr3\\4.jpg'});
  			});
        $('#gr4').click(function(){
          $(".image1").attr({src: 'content\\applications\\gr4\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\gr4\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\gr4\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\gr4\\4.jpg'});
  			});
        $('#i1').click(function(){
  				$(".image1").attr({src: 'content\\applications\\i1\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\i1\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\i1\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\i1\\4.jpg'});
  			});
        $('#i2').click(function(){
          $(".image1").attr({src: 'content\\applications\\i2\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\i2\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\i2\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\i2\\4.jpg'});
  			});
        $('#i3').click(function(){
          $(".image1").attr({src: 'content\\applications\\i3\\1.jpg'});
          $(".image2").attr({src: 'content\\applications\\i3\\2.jpg'});
          $(".image3").attr({src: 'content\\applications\\i3\\3.jpg'});
          $(".image4").attr({src: 'content\\applications\\i3\\4.jpg'});
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
      <div class="form">
        <form method="POST">
          <label class="label">Выборите занятие:</label>
          <select name='lessons'>
            <optgroup label='Груповые занятия'>
              <option id="gr1" value="gr1">"Ранее развитие" (1,5-3 года)</option>
              <option id="gr2"  value="gr2">"Развивающие игры" (3-5 лет)</option>
              <option id="gr3"  value="gr3">"Подготовка к школе" (5-7 лет)</option>
              <option id="gr4"  value="gr4">"Художественная лепка" (с 3 лет)</option>
            </optgroup>
            <optgroup label='Индивидуальные занятия'>
              <option id="i1"  value="i1">"Подготовка к школе" (5-7 лет)</option>
              <option id="i2"  value="i2">"Чтение" (5-7 лет)</option>
              <option id="i3"  value="i3">"Ликвидация пробелов в знаниях. 1-4 класс."</option>
            </optgroup>
          </select><br/>
          <fieldset>
            <legend class="label">Данные ребенка:</legend>
            <label class="label" for="surname_children">Фамилия</label>
            <input class="input-text" type="text" name="surname_children" maxlength="50"/><br/>
            <label class="label" for="name_children">Имя</label>
            <input class="input-text" type="text" name="name_children" maxlength="50"/><br/>
            <label class="label">Отчество</label>
            <input class="input-text" type="text" name="patromymic_children" maxlength="50"/><br/>
            <label class="label">Дата рождения</label>
            <input class="input-date" type="date" name="birthday_children" /><br/>
          </fieldset>
          <fieldset>
            <legend class="label">Данные представителя ребенка:</legend>
            <label class="label">Фамилия</label>
            <input class="input-text" type="text" name="surname_parent" maxlength="50"/><br/>
            <label class="label">Имя</label>
            <input class="input-text" type="text" name="name_parent" maxlength="50"/><br/>
            <label class="label">Отчество</label>
            <input class="input-text" type="text" name="patromymic_parent" maxlength="50"/><br/>
            <label class="label">Номер телефона</label>
            <input class="input-text" type="text" name="mobile_parent" maxlength="18"/><br/>
            <label class="label">Электронный адрес почты</label>
            <input class="input-mail" type="email" name="mail_parent" maxlength="50"/><br/>
          </fieldset>
          <input class="input-submit" type="submit" value="Отправить заявку"/>
        </form>
      </div>
      <div class="images">
        <img class="image1" src="content\\applications\\gr1\\1.jpg">
        <img class="image2" src="content\\applications\\gr1\\2.jpg">
        <img class="image3" src="content\\applications\\gr1\\3.jpg">
        <img class="image4" src="content\\applications\\gr1\\4.jpg">
      </div>
    </div>
  </body>
</html>
