<h1 class='news-title'>НОВОСТИ</h1>
<?php
$file_index = 0;
while (file_exists("content//news//" . ++$file_index . ".txt")) {
    $file = fopen("content//news//" . $file_index . ".txt", "r");
    $name_new = fgets($file);
    fclose($file);
    $text = file_get_contents("content//news//" . $file_index . ".txt");
    $text = mb_substr($text, mb_strlen($name_new));
    print "<h3 class=new-title>" . $name_new . "</h3>";
    print "<p class=new-content>" . $text . "</p>";
}
?>

<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.new-title').click(function () {
            var active_new = $(this).next('p');
            if (active_new.attr('id') != 'active-new') {
                $('#active-new').slideUp(300);
                $('#active-new').attr('id', '');
                active_new.slideToggle(600);
                active_new.attr('id', 'active-new');
            }
            else {
                $('#active-new').slideUp(300);
                $('#active-new').attr('id', '');
            }
        });
    });
</script>
