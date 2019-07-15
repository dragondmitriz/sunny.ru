<html class="background">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Галерея</title>
  <link href="css/media.css" rel="stylesheet" type="text/css" />
  <link href="css/theme.css" rel="stylesheet" type="text/css" />
  <link href="css/gallery.css" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
  <script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      $('.photo').click(function()
      {
        var path_select_image=$(this).attr('src');
        $('#gallery-image').attr({src: path_select_image});
        $('#gallery-collection').children().remove();
        $(this).parent().children('.photo').each(function(indx,element)
        {
          var path_element=$(element).attr('src');
          $('<img>',{
            class: 'gallery-item',
            src: path_element
          }).appendTo('#gallery-collection');
          if (path_element==path_select_image)
          {
            $('#gallery-collection').children().last().css('border','2px solid blue');
            $('#gallery-collection').children().last().attr('id','gallery-select-item');
          }
        });
        $('#gallery').fadeIn(400);
      });

      $('#gallery-button-close').click(function()
      {
        $("#gallery").fadeOut(400);
      });

      $('#gallery-collection').on('click','.gallery-item',function()
      {
        var path_image=$(this).attr('src');
        $('#gallery-collection').children().css('border','none');
        $(this).css('border','2px solid blue');
        $('#gallery-image').attr({src: path_image});
        $(this).attr('id','gallery-select-item');
      });

      $('#gallery-button-left').click(function()
      {
        var gallery_collection=$('#gallery-collection').children();
        var select_item=$('#gallery-select-item');
        select_item.attr('id','');
        var index_select=select_item.index();
        if (index_select!=0)
        {
          var new_select_item=gallery_collection.eq(index_select-1);
          var path_image=new_select_item.attr('src');
          gallery_collection.css('border','none');
          $('#gallery-image').attr({src: path_image});
          new_select_item.css('border','2px solid blue');
          new_select_item.attr('id','gallery-select-item');
        }
      });
      $('#gallery-button-right').click(function(){
        var gallery_collection=$('#gallery-collection').children();
        var select_item=$('#gallery-select-item');
        select_item.attr('id','');
        var index_select=select_item.index();
        if (index_select!=(gallery_collection.length-1))
        {
          var new_select_item=gallery_collection.eq(index_select+1);
          var path_image=new_select_item.attr('src');
          gallery_collection.css('border','none');
          $('#gallery-image').attr({src: path_image});
          new_select_item.css('border','2px solid blue');
          new_select_item.attr('id','gallery-select-item');
        }
      });
    });
  </script>
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
    $index_dir=0;
    while(file_exists("content//media//".++$index_dir)){
      $index_file=0;
      if (file_exists("content//media//".$index_dir."//title.txt")){
        print "<h1 class='text_title'>".file_get_contents("content//media//".$index_dir."//title.txt")."</h1>";
      }
      print "<div class='block_photo'>";
      while(file_exists("content//media//".$index_dir."//".++$index_file.".jpg")){
        print "<img class='photo' src='content//media//".$index_dir."//".$index_file.".jpg'></img>";
      }
      print "</div>";
    }
    ?>
    <div id='gallery'>
      <div id='gallery-main'>
        <div id='gallery-button-left'>
        </div>
        <img id='gallery-image' src='content//media//1/1.jpg'/>
        <div id='gallery-button-right'>
        </div>
        <img id='gallery-button-close' src='images//icon_close.png'/>
      </div>
      <div id='gallery-collection'>
        <img class='gallery-item' src='content//media//1/1.jpg'/>
      </div>
    </div>
  </div>
</body>
</html>
