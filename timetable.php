<html class="background">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/timetable.css" rel="stylesheet" type="text/css" />
		<link href="css/theme.css" rel="stylesheet" type="text/css" />
		<link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
		<title>Расписание</title>
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
			<table class="timetable" width="90%">
				<tr class="text">
					<td width="20%">Занятие</td>
					<td width="10%">Понедельник</td>
					<td width="10%">Вторник</td>
					<td width="10%">Среда</td>
					<td width="10%">Четверг</td>
					<td width="10%">Пятница</td>
					<td width="10%">Суббота</td>
				</tr>
				<?php
					$file_index=0;
					while(file_exists("content//timetable//".++$file_index.".txt"))
					{
						$file=fopen("content//timetable//".$file_index.".txt",r);
						$name=fgets($file);
						$color_name=mb_substr($name,mb_strpos($name," ")+1);
						$name=mb_substr($name,0,mb_strpos($name," "));
						$monday=fgets($file);
						$tuesday=fgets($file);
						$wednesday=fgets($file);
						$thursday=fgets($file);
						$friday=fgets($file);
						$satuday=fgets($file);
						print "<tr class=\"text\">";
						print "<td style='background-color: ".$color_name."'>".$name."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($monday," ")){
							$time1=mb_substr($monday,0,mb_strpos($monday," "));
							$monday=mb_substr($monday,mb_strpos($monday," ")+1);
							$time2=mb_substr($monday,0,mb_strpos($monday," "));
							$monday=mb_substr($monday,mb_strpos($monday," ")+1);
							$color=$monday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($tuesday," ")){
							$time1=mb_substr($tuesday,0,mb_strpos($tuesday," "));
							$tuesday=mb_substr($tuesday,mb_strpos($tuesday," ")+1);
							$time2=mb_substr($tuesday,0,mb_strpos($tuesday," "));
							$tuesday=mb_substr($tuesday,mb_strpos($tuesday," ")+1);
							$color=$tuesday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($wednesday," ")){
							$time1=mb_substr($wednesday,0,mb_strpos($wednesday," "));
							$wednesday=mb_substr($wednesday,mb_strpos($wednesday," ")+1);
							$time2=mb_substr($wednesday,0,mb_strpos($wednesday," "));
							$wednesday=mb_substr($wednesday,mb_strpos($wednesday," ")+1);
							$color=$wednesday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($thursday," ")){
							$time1=mb_substr($thursday,0,mb_strpos($thursday," "));
							$thursday=mb_substr($thursday,mb_strpos($thursday," ")+1);
							$time2=mb_substr($thursday,0,mb_strpos($thursday," "));
							$monday=mb_substr($thursday,mb_strpos($thursday," ")+1);
							$color=$monday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($friday," ")){
							$time1=mb_substr($friday,0,mb_strpos($friday," "));
							$friday=mb_substr($friday,mb_strpos($friday," ")+1);
							$time2=mb_substr($friday,0,mb_strpos($friday," "));
							$friday=mb_substr($friday,mb_strpos($friday," ")+1);
							$color=$friday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						$time1=$time2=$color=$class="";
						if (mb_strpos($satuday," ")){
							$time1=mb_substr($satuday,0,mb_strpos($satuday," "));
							$satuday=mb_substr($satuday,mb_strpos($satuday," ")+1);
							$time2=mb_substr($satuday,0,mb_strpos($satuday," "));
							$satuday=mb_substr($satuday,mb_strpos($satuday," ")+1);
							$color=$satuday;
							$class=" style='background-color: ".$color."''";
						}
						print "<td".$class.">".$time1."<br>".$time2."</td>";
						print "</tr>";
						fclose($file);
					}
				?>
			</table>
		</div>
	</body>
</html>
