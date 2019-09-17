<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="description" content='Галерея Центра интеллектуального развития "Солнышко"'/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
    <link href="css/top.css" rel="stylesheet"/>
    <link href="css/menu.css" rel="stylesheet"/>
    <link href="css/contactsCorner.css" rel="stylesheet"/>
    <link rel="SHORTCUT ICON" href="images/sun.gif" type="image/gif">
    <title>Солнышко</title>
</head>
<body class="background">
<header>
    <?php require "top.html"; ?>
</header>
<main>
    <nav>
        <?php require "menu.html"; ?>
    </nav>
    <div class="media">
        <?php
        $index_dir = 0;
        while (file_exists("content//media//" . ++$index_dir)) {
            $index_file = 0;
            if (file_exists("content//media//" . $index_dir . "//title.txt")) {
                print "<h1 class='text_title'>" . file_get_contents("content//media//" . $index_dir . "//title.txt") . "</h1>";
            }
            print "<div class='block_photo'>";
            while (file_exists("content//media//" . $index_dir . "//" . ++$index_file . ".jpg")) {
                print "<img class='photo' src='content//media//" . $index_dir . "//" . $index_file . ".jpg'/>";
            }
            print "</div>";
        }
        ?>
        <div id='gallery'>
            <div id='gallery-main' class='gallery-main'>
                <div id='ghoast'></div>
                <div id='gallery-button-left' class='gallery-button'></div>
                <div id='gallery-image' class='gallery-image'></div>
                <div id='gallery-button-right' class='gallery-button'></div>
                <div id='gallery-button-close'></div>
            </div>
        </div>
    </div>
</main>
<?php require "contactsCorner.html"; ?>

<script type="text/javascript" src="lib/JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript">
    let collectionGallery = [];
    let indx_selectedItem = 0;

    //обработка нажатия на изображение в галерее
    $('.photo').click(function () {
        let path_select_image = $(this).attr('src');//сохраняем адрес выбранного изображения
        $('#gallery-image').css('background-image', 'url(' + path_select_image.slice(0, -4) + '!' + path_select_image.slice(-4) + ')');//установка выбранного изображения на блок отображения изображения в Галерее
        collectionGallery.length = 0;//очистка коллекции адресов изображений высокого разрешения

        //перебор все адресов изображений в блоке мероприятия,в котором находилось выбраное пользователем изображение, и создание коллекции с адресами изоражений более высокого разрешения
        $(this).parent().children('.photo').each(function (indx, element) {
            let url = $(element).attr('src');
            if (url === path_select_image) {
                indx_selectedItem = indx;
            }
            url = url.slice(0, -4) + '!' + url.slice(-4);//форматирование адреса изображения для получения адреса к его более выскогокачесвенной копии, отмеченной восклицательным знаком в конце имени файла
            collectionGallery[indx] = 'url(' + url + ')';
        });

        //присваивание адреса изображения для правого блока переключения на следующее изображение из коллекции адресов высококачественных изображений
        if (indx_selectedItem === collectionGallery.length - 1) {
            $('#gallery-button-right').css('background-image', collectionGallery[0]);
        } else {
            $('#gallery-button-right').css('background-image', collectionGallery[indx_selectedItem + 1]);
        }

        //присваивание адреса изображения для левого блока переключения на следующее изображение из коллекции адресов высококачественных изображений
        if (indx_selectedItem === 0) {
            $('#gallery-button-left').css('background-image', collectionGallery[collectionGallery.length - 1]);
        } else {
            $('#gallery-button-left').css('background-image', collectionGallery[indx_selectedItem - 1]);
        }
        $('#gallery').fadeIn(400);//проявление "Галереи"
    });

    //обработка нажатия на кнопку закрытия Галереи
    $('#gallery-button-close').click(function () {
        $("#gallery").fadeOut(400);
    });

    //обработка нажатия на левое изображения в просмотре Галереи
    /*проверяет позицию текущего изображения в массиве коллекции адресов
    * смещает соответсвующе индекс текущего изображения
    * и присваивает новые изображения для боковых блоков навигации*/
    $('#gallery-button-left').click(function () {

        //кэширование селекторов
        let ghoast$ = $('#ghoast');
        let rightButton$ = $('#gallery-button-right');
        let leftButtoin$ = $('#gallery-button-left');
        let image$ = $('#gallery-image');

        /*"призрак" - блок с шириной 0 в начале контейнера "Галереи"(слева)
        * отвечает за анимацию блоков при переключении картинок
        * позволяет расширить коллекцию оперируемых изображений на 1,
        * чтобы полноценно отображать анимацию с новым изображением*/
        ghoast$
        //загрузка нового изображения в "призрака"
            .css('background-image', function () {
                if (indx_selectedItem - 2 < 0) return collectionGallery[collectionGallery.length - 2 + indx_selectedItem];
                return collectionGallery[indx_selectedItem - 2];
            })
            //для выравниваниия расположения изображений до и после анимации, так как кнопки галереи имеют отступы в 5px, что выдаёт "призрака" и тот выдаёт своё существование
            .attr('class', 'gallery-button');

        //анимация переключения изображений
        let speedAnimation = 400;
        rightButton$
            .animate({width: '0'}, speedAnimation / 2);
        leftButtoin$
            .animate({width: '60%'}, speedAnimation);
        image$
            .animate({width: '20%'}, speedAnimation);
        ghoast$
            .animate({width: '20%'}, speedAnimation)
            .promise()
            .done(function () {

                //"Квантовая телепортация" после анимации
                rightButton$
                    .css('width', '20%')
                    .css('background-image', image$.css('background-image'));
                image$
                    .css('width', '60%')
                    .css('background-image', leftButtoin$.css('background-image'));
                leftButtoin$
                    .css('width', '20%')
                    .css('background-image', ghoast$.css('background-image'));
                ghoast$
                    .css('width', '0')
                    .css('background-image', '')
                    .attr('class', '');//делаем призрака призраком)
            });

        //вычисление индекса нового основного изображения
        if (indx_selectedItem === 0) {
            indx_selectedItem = collectionGallery.length - 1;
        } else {
            indx_selectedItem--;
        }
    });

    //обработка нажатия на правое изображение в просмотре Галереи
    /*проверяет позицию текущего изображения в массиве коллекции адресов
    * смещает соответсвующе индекс текущего изображения
    * и присваивает новые изображения для боковых блоков навигации*/
    $('#gallery-button-right').click(function () {

        //кэширование селекторов
        let ghoast$ = $('#ghoast');
        let rightButton$ = $('#gallery-button-right');
        let leftButtoin$ = $('#gallery-button-left');
        let image$ = $('#gallery-image');

        //"Квантовая телепортация"
        ghoast$
            .css('width', '20%')
            .css('background-image', leftButtoin$.css('background-image'))
            .attr('class', 'gallery-button');
        leftButtoin$
            .css('width', '60%')
            .css('background-image', image$.css('background-image'));
        image$
            .css('width', '20%')
            .css('background-image', rightButton$.css('background-image'));
        rightButton$
            .css('width', '0')
            .css('background-image', function () {
                if (indx_selectedItem + 2 >= collectionGallery.length - 1)
                    return collectionGallery[collectionGallery.length - indx_selectedItem - 1];
                return collectionGallery[indx_selectedItem + 2]
            });

        //анимация переключения изображений
        let speedAnimation = 400;
        ghoast$
            .animate({width: '0'}, speedAnimation / 2)
            .promise()
            .done(function () {
                $(this)
                    .attr('class', '')
            });
        leftButtoin$.animate({width: '20%'}, speedAnimation);
        image$.animate({width: '60%'}, speedAnimation);
        rightButton$.animate({width: '20%'}, speedAnimation);

        //вычисление индекса нового основного изображения
        if (indx_selectedItem === collectionGallery.length - 1) {
            indx_selectedItem = 0;
        } else {
            indx_selectedItem++;
        }
    })
    ;
</script>
</body>
</html>
