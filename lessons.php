<html class="background">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/lessons.css" rel="stylesheet" type="text/css" />
		<link href="css/theme.css" rel="stylesheet" type="text/css" />
		<link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
		<title>Занятия</title>
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
				$file_index=1;
				print("<table>");
				while(file_exists("content\\lessons\\".$file_index.".txt"))
				{
					//считывание с файла данных о занятии
					$file=fopen("content\\lessons\\".$file_index.".txt","r");
					$lesson_title=fgets($file);
					$lesson_text=fgets($file);
					$lesson_teachers=fgets($file);
					fclose($file);
					//сортировка и вывод информации о занятии
					print("<tr><td>");
					$image_align="right";
					if ($file_index%2==0)
					{
						$image_align="left";
					}
					print("<img class=\"lesson_image\" src=\"content\\lessons\\".$file_index.".jpg\" align=\"".$image_align."\">");
					print("<h3 class=\"text_title\" align=\"center\">".$lesson_title."</h3>");
					print("<div class=\"text\">".$lesson_text."</div>");
					print("</td></tr>");
					$file_index++;
				}
			?>
		</div>
	</body>
</html>
