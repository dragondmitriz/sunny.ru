<html class="background">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/homework.css" rel="stylesheet" type="text/css" />
		<link href="css/theme.css" rel="stylesheet" type="text/css" />
		<link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
		<title>Домашнее задание</title>
		<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
		<script type="text/javascript">
	    $(document).ready(function()
	    {
				$('.title_date_homework').click(function()
				{
					var date_homework=$(this).parent('.date_homework');
					if (date_homework.attr('id')!='active_date_homework')
					{
						var index=0;
						$('#active_date_homework').children('.group_homework').slideUp(300);
						$('#active_date_homework').children('.group_homework').children('.homework').slideUp(300);
						$('#active_date_homework').children('.title_date_homework').css('border-bottom','none');
						$('#active_date_homework').attr('id','');
						date_homework.children('.group_homework').slideToggle(600);
						date_homework.attr('id','active_date_homework');
						$(this).css('border-bottom','1px solid black');
					}
					else
					{
						date_homework.children('.group_homework').slideUp(300);
						date_homework.children('.group_homework').children('.homework').slideUp(300);
						date_homework.attr('id','');
						$(this).css('border-bottom','none');
					}
				});

				$('.group_homework').click(function()
				{
					if ($(this).attr('id')!='active_group_homework')
					{
						var index=0;
						$('#active_group_homework').children('.homework').slideUp(300);
						$('#active_group_homework').attr('id','');
						$(this).children('.homework').slideToggle(600);
						$(this).attr('id','active_group_homework');
					}
					else
					{
						$(this).children('.homework').slideUp(300);
						$(this).attr('id','');
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
			 $dates=scandir('content\\homework');
			 for ($i0=2; $i0<count($dates); $i0++)
			 {
				 if (is_dir('content\\homework\\'.$dates[$i0]))
				 {
					 print '<div class=\'date_homework\'>';
					 print '<h3 class=\'title_date_homework\'>';
					 print $dates[$i0];
					 print '</h3>';
					 $groups=scandir('content\\homework\\'.$dates[$i0]);
					 for($i1=0;$i1<count($groups);$i1++)
					 {
					 if (is_file('content\\homework\\'.$dates[$i0].'\\'.$groups[$i1]))
						 {
							 $homework=file_get_contents('content\\homework\\'.$dates[$i0].'\\'.$groups[$i1]);
							 print '<div class=\'group_homework\'>';
							 print iconv('windows-1251','UTF-8',strstr($groups[$i1],'.txt',true));
							 print '<div class=\'homework\'>';
							 print $homework;
							 print '</div>';
							 print '</div>';
						 }
					 }
					 print '</div>';
				 }
			 }
			?>
    </div>
  </body>
</html>
