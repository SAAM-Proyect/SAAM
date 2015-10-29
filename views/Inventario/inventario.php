<?php require('views/header.php'); ?>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="<?php echo URL; ?>public/css/styleInventario.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/fontsInventarios.css">
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.min.js"></script>
</head>
<body>
<div class="global">
    <div class="sidebar">
        <p>Menu</p>
        <ul>
            <li><a href="#"><span class="icon-user"></span>Clientes</a></li>
            <li><a href="#"><span class="icon-user-tie"></span>Proveedores</a></li>
            <li class="submenu elemento"><a href="#"><span class="icon-stats-bars"></span>Productos</a>
            </li>
            <li><a href="#"><span class="icon-coin-dollar"></span>Ventas</a></li>
        </ul>

    </div>
    <div class="contenido" >
        <a href="#" class="bt-menu"><span class = "icon-menu"></span></a>
    </div>
    <section class="tablaInventario ocultar" >
        <article>
            <div>
                <table border = "1px">
                    <thead>
                    <tr>
                        <th colspan="7">
                            Inventario de productos
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Codigo del producto</th>
                        <th>Proveedor</th>
                        <th>Stock</th>
                        <th>Precio compra</th>
                        <th>Precio venta</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td>124</td>
                        <td>Coca</td>
                        <td>e123</td>
                        <td>Arturo</td>
                        <td>12</td>
                        <td>123</td>
                        <td>321</td>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>Pepsi</td>
                        <td>e124</td>
                        <td>Ricardo</td>
                        <td>12</td>
                        <td>126</td>
                        <td>456</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</div>
</body>
<script type="text/javascript">
        $(document).ready(function(){
            $('.bt-menu').click(function(){
            $('.contenido').toggleClass('abrir');
            $('.tablaInventario').toggleClass('abrir');
        });

        $(document).on('click','.elemento',function(){

            $elemento = $(this).val();
            alert($elemento);
            $('.tablaInventario').toggleClass('ocultar');
        });
        /*$('.bt-menu').mouseover(function(){
         $('.contenido').toggleClass('abrir');
         });*/

    });


</script>
</html>