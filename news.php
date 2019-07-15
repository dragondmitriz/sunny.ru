<html class="page">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/news.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
    $(document).ready(function()
    {
			$('.new_title').click(function(){
				var active_new=$(this).next('p');
				if (active_new.attr('id')!='active_new')
				{
					$('#active_new').slideUp(300);
					$('#active_new').attr('id','');
					active_new.slideToggle(600);
					active_new.attr('id','active_new');
				}
				else
				{
					$('#active_new').slideUp(300);
					$('#active_new').attr('id','');
				}
			});
		});
	</script>
</head>
<body>
	<h1 class='news_title'>НОВОСТИ</h1>
	<?php
	$file_index=0;
	while(file_exists("content//news//".++$file_index.".txt"))
	{
		$file=fopen("content//news//".$file_index.".txt",r);
		$name_new=fgets($file);
		fclose($file);
		$text=file_get_contents("content\\news\\".$file_index.".txt");
		$text=mb_substr($text,mb_strlen($name_new));
		print "<h3 class=new_title>".$name_new."</h3>";
		print "<p class=new_content>".$text."</p>";
	}
	?>
</body>
</html>
