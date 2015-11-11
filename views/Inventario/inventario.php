<?php require('views/header.php'); ?>
<!- Obterner informacion de hijos de un div-->
<div class="global">
    <div class="sidebar">
        <div><p>Men�</p></div>
        <ul>
            <li class="elemento"><a id="seleccion" href="#"><span class="icon-user"></span><span>Clientes</span></a></li>
            <li class="elemento"><a id="seleccion" href="#"><span class="icon-user-tie"></span><span>Proveedores</span></a></li>
            <li class="elemento"><a href="#" onclick=""><span class="icon-stats-bars"></span><span>Productos</span></a>
            </li>
            <li class="elemento"><a id="seleccion" href="#"><span class="icon-coin-dollar"></span><span>Ventas</span></a></li>
        </ul>

    </div>
    <div id = "icon-sidebar" class="contenido" >
        <a href="#" class="bt-menu"><span class = "icon-menu"></span></a>
    </div>

    <div class="tablaInventario ocultar" >
        <article>
            <div id="myContent">
            </div>
        </article>
    </div>
</div>

<script type="text/javascript">
    var sel;

        $(document).ready(function(){

        $('.bt-menu').css("z-index","9999");
           $('.bt-menu').click(function(){
            $('.tablaInventario').addClass('abrir');
               $('#icon-sidebar').toggleClass('abrir');

        });
        $(document).on('click','.elemento',function() {
            $elemento = $(this).children("a").children("span:last-child").html();
            $('.tablaInventario').removeClass('ocultar');
            $("#myContent").empty();
            switch ($elemento){
                case "Proveedores":
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo URL; ?>' + 'Inventario/proveedores',
                        data: "12"
                    }).done(function (response) {

                        $("#myContent").html(response);
                    });
                    break;
                case "Productos":
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo URL; ?>' + 'Inventario/productos',
                        data: "12"
                    }).done(function (response) {

                        $("#myContent").html(response);
                    });
                case "Clientes":

                    break;
                case "Ventas":

                    break;
            }


        });

        /*$('.bt-menu').mouseover(function(){
         $('.contenido').toggleClass('abrir');
         });*/

    });

</script>

<?php require("views/footer.php"); ?>