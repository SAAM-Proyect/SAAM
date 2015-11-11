<?php require('views/header.php');?>
<div class = "global">
    <div class ="ticketVentas">
        <div class ="compra">
            <div clas = "ticketProductos">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est id, illo labore laborum laudantium maiores minus, omnis quae quo quod repellat sequi voluptates voluptatibus voluptatum. Ad delectus quod voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam consectetur dignissimos doloribus eum eveniet excepturi incidunt laborum minus odio omnis perferendis perspiciatis reprehenderit repudiandae saepe, soluta sunt totam voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eligendi magnam quas quo repudiandae soluta vel voluptates voluptatum! At deserunt ipsa iste itaque nihil omnis quos recusandae repellendus sed vel.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deserunt dicta dolore eaque eligendi fuga modi, nemo numquam porro reprehenderit saepe sed sunt ut velit veniam! Architecto cupiditate repellat sed.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, consequuntur ea eaque exercitationem labore minima sapiente tenetur vel velit. Amet at consequuntur delectus facilis impedit iste laudantium quia veritatis voluptas.</p>
            </div>
        </div>
    </div>
    <div class="productosVentas">
    </div>
    <div class="botonesVentas">
        <input type="button" class="botonesOpcion" value="submit1"/>
        <input type="button" class="botonesOpcion" value="submit2"/>
        <input type="button" class="botonesOpcion" value="submit3"/>
        <input type="button" class="botonesOpcion" value="submit4"/>
        <input type="button" class="botonesOpcion" value="submit5"/>
        <input type="button" class="botonesOpcion" value="submit6"/>
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

        $(".botonesOpcion").click(function(){
            alert($(this).val());
        });
        $(document).load(function(){
            $('.idd').hide();
        });
        $(document).on('click','.hijos',function(){

            var pru =  $(this).find('figcaption').attr('class');
            if(pru == 'idd') {
                var pru1 =  $(this).find('figcaption.idd').html();
            }
           //var element = $(this).children('figure').children('figcaption .idd').html();

        });
        /*$('.hijos').click(function(){
           var a = $(this).children('span').html();
            alert(a);
        });*/
    });
</script>
<?php require('views/footer.php'); ?>
