<!DOCTYPE html>
<html>
    <head>
        <!--Adjuntamos los metadatos-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <title>SAAM</title>
        <link rel="icon" type="image/png" href="<?php echo URL; ?>public/img/favicon.png"/>
        <!-- Compiled and minified CSS -->
        <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"/-->
        <link href="<?php echo URL; ?>public/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link lazyload href="<?php echo URL; ?>public/css/style.css" rel="stylesheet"/>
        <link lazyload href="<?php echo URL; ?>public/css/jquery.bxslider.css" rel="stylesheet" />
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>public/js/materialize/js/bin/materialize.min.js" defer></script>
        <script async="true" src="<?php echo URL; ?>public/js/script.js" type="text/javascript"></script>
        <script async="true" src="<?php echo URL; ?>public/js/_login.js" type="text/javascript"></script>
        <script  src="<?php echo URL; ?>public/js/jquery.bxslider.js"></script>
        <link  href="<?php echo URL; ?>public/css/menu.css" rel="stylesheet"/>
        <script>
            $(document).ready(function(){

                $('.bxslider').bxSlider();
                $(".preloaderLogin").delay(800).fadeOut("slow");

            });
            $(function(){
                $('#id').addClass('hover').removeClass('normal').fadeIn("slow");
                $('#closeSessionBtn').click(function(){
                    document.location = "<?php echo URL; ?>Usuario/destroySession";
                });
                $('#buttonProfile').click(function(){
                    document.location = "<?php echo URL; ?>Usuario/perfil";
                });
            });
            (function($) {
                $(document).ready(function() {
                    $("#cssmenu ul li:nth-child(2)").addClass("active");
                    $('#cssmenu').prepend('<div id="menu-button">Menú</div>');
                    $('#cssmenu #menu-button').on('click', function(){
                        var menu = $(this).next('ul');
                        if (menu.hasClass('open')) {
                            menu.removeClass('open');
                        }
                        else {
                            menu.addClass('open');
                        }
                    });
                });
            })(jQuery);
        </script>
    </head>
    <body class="fondox secondx">
        <div class="preloaderLogin"><p><img src="<?php echo URL; ?>public/img/cargando.gif"></p></div>
        <nav id='cssmenu'>
            <ul>
                <li class="active"><a href="<?php echo URL; ?>"><span class="titulo">SAAM</span></a></li>
                <li><a href='#'><span>Inicio</span></a></li>
                <li><a href='#'><span>Productos</span></a></li>
                <li><a href='#'><span>Precios</span></a></li>
            </ul>
        </nav>