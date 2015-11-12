/**
 * Created by Fernando on 02/11/2015.
 */
$(document).ready(function(){
    $(".mensajex").hide();
    var urlx = "http://localhost/SAAM/";
    cargar_todos();
    function cargar_todos(){
        $.ajax({
            type:'POST',
            url: urlx+'Faqs/todo'
        }).done(function(response){
            $("#mycontainer").html(response);
        });

        $.ajax({
            type:'POST',
            url: urlx+'Faqs/frecuentes'
        }).done(function(response){
            $("#Preguntar").html(response);
        });
    };
    $("#crear").click(function(e){
        var asunto= $('form[name=faqs_form] input[name=Asunto]').val();
        var Pregunta=$('form[name=faqs_form] textarea[name=Pregunta]').val();
        var Respuesta=$('form[name=faqs_form] textarea[name=Respuesta]').val();
        $.ajax({
            type:'POST',
            url: urlx+'Faqs/insertar',
            data:{Asunto:asunto,Pregunta:Pregunta,Respuesta:Respuesta}
        }).done(function(response){
            if(response==="OK"){
                $(".mensajex").html("Se ha agregado").fadeIn("slow").delay(3000).fadeOut("slow");
                cargar_todos();
            }
            else{
                $(".mensajex").html("No se ha agregado").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
            }
        });
        e.preventDefault();
    })
});