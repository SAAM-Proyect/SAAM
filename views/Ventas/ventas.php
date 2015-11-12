<?php require('views/header.php');?>
<div class = "global">
    <div class ="ticketVentas">
        <div class ="compra">
            <p class="par">algo</p>
        </div>
    </div>
    <div class="productosVentas">
    </div>
    <div class="botonesVentas">
        <input type="button" class="botonesOpcion" value="submit1"/>
        <input type="button" class="botonesOpcion" value="submit2"/>
        <input type="button" class="botonesOpcion" value="submit3"/>
        <input type="button" class="botonesOpcion" value="submit4"/>
        <input type="button" class="botonesOpcion" value="limpiar ticket"/>
        <input type="button" class="botonesOpcion" value="vender"/>
    </div>
    <div class="ventana-modal">
        <div class="form">
            <div class="cerrar-ventana"><a href="#">Cerrar X</a></div>
            <h4>Confirmar venta</h4>
            <form action="">
                <input type="button" class="button-ventana" id="cancelar-ventana" value="Cancelar"/>
                <input type="button" class="button-ventana" id="aceptar-ventana"value="Aceptar"/>
            </form>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo URL; ?>' + 'Ventas/productos',
            data: "12"
        }).done(function (response) {
            $(".productosVentas").html(response);
        });
        $(document).load(function(){
            $('.idd').hide();
        });
        $(document).on('click','.hijos',function(){
            var pru =  $(this).find('figcaption').attr('class');
            if(pru == 'idd') {
                var pru1 =  $(this).find('figcaption.idd').html();

                $.ajax({
                    type:'POST',
                    url: "<?php URL;?>" + "Ventas/ventasProducto",
                    data:{id:pru1}
                }).done(function(response){
                    $(".compra").fadeOut().html(response).fadeIn('slow');
                });
            }
        });
        $(document).on('click','.botonesOpcion',function(){
            //Opciones de venta
            $botonOpcion = $(this).val();
            switch($botonOpcion){
                case 'vender':
                    $('.ventana-modal').slideDown('slow');
                    break;
                case 'limpiar ticket':

                    '<?php $_SESSION["ArrayProductos"] = array();?>'
                    alert("asf");
                    $.ajax({
                        type:'POST',
                        url: "<?php URL;?>" + "Ventas/ventasProducto",
                        data:{id:''}
                    }).done(function(response){
                        $(".compra").fadeOut().html(response).fadeIn('slow');
                    });
                    break;
                case 'submit4':
                    alert("das");
            }
            if($(this).val()=="vender"){

            }
        });
        $(document).on('click','.cerrar-ventana',function(){
           $('.ventana-modal').slideUp('slow');
        });
        $(document).on('click','.button-ventana',function(){
            if($(this).val()=='Cancelar'){
                $('.ventana-modal').slideUp('fast');
            }else if($(this).val()=='Aceptar'){
                $('.ventana-modal').slideUp('fast');
            }
        })
    });
</script>
<script>
    $(function(){
        $('.hijos').draggable({herlper:'clone'});
        $('.compra').droppable({
             drop:function(event,ui){
                $(this).find('.ticketProductos').html("hecho");
             }
        });
    });
</script>
<?php require('views/footer.php'); ?>
