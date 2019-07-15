<html class="background">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Контакты</title>
    <link href="css/contacts.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
  </head>
  <body>
    <div name="top" class=top>
      <?php
        require "top.php";
      ?>
    </div>
    <div name="menu" class="menu">
      <?php
        require "menu.php";
      ?>
    </div>
    <div class="content">
      <?php
        $file=fopen("content//contacts//contacts.txt",r);
        while(!feof($file))
        {
          print "<p class=\"text\">".fgets($file)."</p>";
        }
        fclose($file);
      ?>
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A131dad4e83b449306f7c21d71e02b28f62021c44954a783b86d89f70d1ab9a58&amp;width=806&amp;height=570&amp;lang=ru_RU&amp;scroll=true"></script>
  </body>
</html>
