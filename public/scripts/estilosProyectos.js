<script src = "Chart.js"> </ script>
$(document).ready(function(){

    $(".mensaje_proyecto").hide();
    var urlx = "http://localhost/saam/";
    cargar_todos();
    function cargar_todos(){
        $.ajax({
            type:'POST',
            url: urlx+'Faqs/todo'
        }).done(function(response){
            $("#mycontainer_proyecto").html(response);
        });
    }
    $('#Anadir_Proyecto').click(function(e){
        var nombre= $('form[name=Registro_Proyecto] input[name=Nombre]').val();
        var descripcion= $('form[name=Registro_Proyecto] textarea[name=Descripcion]').val();
        var precio= $('form[name=Registro_Proyecto] input[name=Precio]').val();
        $.ajax({
            type:'POST',
            url: urlx+'Proyectos/insertar',
            data:{Nombre:nombre,Descripcion:descripcion,Precio:precio}
        }).done(function(response){
            if(response==="OK"){
                $(".mensaje_proyecto").html("Se ha agregado").fadeIn("slow").delay(3000).fadeOut("slow");
                cargar_todos();
            }
            else{
                $(".mensaje_proyecto").html("No se ha agregado").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
            }
        });
        e.preventDefault();
    });
});