<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function()
  {
    $('#menu_main').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_lessons').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_applications').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_payment').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_timetable').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_homework').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_media').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_contacts').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('#menu_faq').click(function(){
      window.location=$(this).find("a").attr("href");
      return false;
    });

    $('.menu-main').click(function(){
      var items=$('.menu-item');
      var len=items.length;
      for(var i=0 ; i< len ; i++){
        if (items[i].style.display!='table-row'){
          items.eq(i).slideToggle(500);
        }else{
          items.eq(i).slideUp(500);
        }
      }
    });
  });
  </script>
</head>
<body>
  <div id='menu_menu' class="menu-main">Меню</div>
  <div id='menu_main' class="menu-item"><a href='index.php'></a>Главная</div>
  <div id='menu_lessons' class="menu-item"><a href='lessons.php'></a>Занятия</div>
  <div id='menu_applications' class="menu-item"><a href='applications.php'></a>Запись на занятия</div>
  <div id='menu_payment' class="menu-item"><a href='payment.php'></a>Схема оплаты</div>
  <div id='menu_timetable' class="menu-item"><a href='timetable.php'></a>Расписание</div>
  <div id='menu_homework' class="menu-item"><a href='homework.php'></a>Домашнее задание</div>
  <div id='menu_media' class="menu-item"><a href='media.php'></a>Галерея</div>
  <div id='menu_whatknow' class="menu-item"><a href='whatknow.php'></a>Что нужно знать<br>о своем ребенке</div>
  <div id='menu_recommendations' class="menu-item"><a href='recommendations.php'></a>Советы и рекомендации</div>
  <div id='menu_faq' class="menu-item"><a href='faq.php'></a>Вопросы и ответы</div>
  <div id='menu_contacts' class="menu-item"><a href='contacts.php'></a>Контакты</div>
</body>
</html>
