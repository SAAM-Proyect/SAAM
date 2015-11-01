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
<!- Obterner informacion de hijos de un div-->
<div class="global">
    <div class="sidebar">
        <p>Menu</p>
        <ul>
            <li><a href="#"><span class="icon-user"></span>Clientes</a></li>
            <li><a href="#"><span class="icon-user-tie"></span>Proveedores</a></li>
            <li class="submenu elemento"><a href="#" onclick="window.location herf = '<?php echo URL;?>Inventario/inventario'"><span class="icon-stats-bars"></span><span>Productos</span></a>
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
                        <!-- action="<?php echo URL; ?>User/signIn" -->
                        <form action="<?php echo URL; ?>Inventario/inventario" method="GET" >
                            <input type="text" name ="codProducto" required/>
                            <input type="submit" value="enviar"/>
                        </form>
                    </tr>
                    <?php

                        for($i = 0; $i<count($this->getProducts);$i++){
                            $varia = "";
                            foreach($this->getProducts as $key => $valor){
                                $varia .= "<td>".$valor."</td>";

                            }
                            echo "<tr>".$varia."</tr>";
                        }
                    ?>
                    <!--<?php

                    if(count($this->Producto)>0){
                        $varia = "";
                        foreach($this->Producto as $key => $valor){
                            $varia .= "<td>".$valor."</td>";
                        }
                        echo "<tr>".$varia."</tr>";
                    }else{
                        if(count($this->Producto == 0)){
                            echo "<script> alert('Parece que no tienes productos, ¿quieres agregar uno?') </script>";
                        }
                        echo "<script>alert('No es mayor');</script>";
                    }
                    ?>-->
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
        $(document).on('click','.elemento',function() {
            $elemento = $(this).children("a").children("span:last-child").html();
            $('.tablaInventario').toggleClass('ocultar');

        });
        /*$('.bt-menu').mouseover(function(){
         $('.contenido').toggleClass('abrir');
         });*/

    });
</script>

</html>