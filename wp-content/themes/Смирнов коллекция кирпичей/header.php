<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="styleGeneral.css">-->
    <title>
        <?php the_title();?>
    </title>
    <?php wp_head();?>
</head>
<body>
    
<!--header-->
<header>
    <div class="menu-wrapper">
            <div class="main-menu">
                <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
            </div>
    </div>      
    <!-- <div class="banner">
        <h1>Коллекция Кирпичей</h1>
        <div class="main-menu">
           <?php
               /* wp_nav_menu( 
                    array( 'container_class' => 'main-nav', 'theme_location' => 'primary' )
                );*/ 
            ?>
            <a href="http://localhost/kirpich/"><div>Коллекция</div></a>
            <a href="http://localhost/kirpich/Novinki/"><div>Новинки</div></a>
            <a href=""><div>Контакты</div></a>
            <a href=""><div>Ссылки</div></a>
            <a href="http://localhost/kirpich/collection/"><div>Каталог</div></a>
            <a href=""><div>Обмен</div></a>
            <a href=""><div>Поездки</div></a>
        </div>
    </div>   -->
</header>