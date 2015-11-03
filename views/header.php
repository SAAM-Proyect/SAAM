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
    <!-- CSS de Omar-->
    <link href="<?php echo URL; ?>public/css/styleInventario.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/fontsInventarios.css">
    <!-- ----- -->
    <link lazyload href="<?php echo URL; ?>public/css/style.css" rel="stylesheet"/>
    <link lazyload href="<?php echo URL; ?>public/css/estilo.css" rel="stylesheet"">
    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>public/js/materialize/js/bin/materialize.min.js" defer></script>
    <script async="true" src="<?php echo URL; ?>public/js/script.js" type="text/javascript"></script>
    <script async="true" src="<?php echo URL; ?>public/js/_login.js" type="text/javascript"></script>
    <script async="true" src="<?php echo URL; ?>public/js/faqs.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/Faqs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/estilosMoises.css">
    <link  href="<?php echo URL; ?>public/css/tareasestilos.css" rel="stylesheet"/>
    <link  href="<?php echo URL; ?>public/css/menu.css" rel="stylesheet"/>
    <script>
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
                $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
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
    <script type="text/javascript" src="<?php echo URL; ?>public/js/script.js"></script>
    <link  href="<?php echo URL; ?>public/css/Progres-Bar-Circular.css" rel="stylesheet"/>
    <link  href="<?php echo URL; ?>public/css/estilo.css" rel="stylesheet"/>
</head>
<body>
<nav id='cssmenu'>
    <ul>
        <li class="active"><a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>public/img/favicon.png"><span class="titulo">SAAM</span></a></li>
        <li><a href='#'><span>Clientes</span></a></li>
        <li><a href='#'><span>Archivos</span></a></li>
        <li><a href='<?php echo URL."Tareas"; ?>'><span>Tareas</span></a></li>
        <li><a href='<?php echo URL."Proyectos"; ?>'><span>Proyectos</span></a></li>
        <li class="has-sub"><a href=''><span><?php echo ucfirst(Session::getValue('U_NAME')); ?></span></a>
            <ul>
                <li><a href="<?php echo URL."Usuario/perfil"; ?>">Ver perfil</a></li>
                <li><a href="#">Configuración</a></li>
                <li><a href="<?php echo URL."Inventario/inventario";?>">Inventario</a></li>
                <li><a href="<?php echo URL."Usuario/salir"; ?>">Salir</a></li>
            </ul>
        </li>
    </ul>
</nav>