$(function(){


    $('#signUpButton').click(function(){
        $("#signInForm").hide();
        $("#signUpForm").fadeToggle();
    });

    $('#signInButton').click(function(){
        $("#signUpForm").hide();
        $("#signInForm").fadeToggle();
    });

    $('#signUpBtn').click(function(e){
        e.preventDefault();
        signUp();
    });

    $('#signInBtn').click(function(e){
        e.preventDefault();
        signIn();
    });
    $("#passRecoverBtn").click(function(e){
        e.preventDefault();
        recoverPassword();
    });
    $(".passRecover").click(function(e){
        e.preventDefault();
        $("#signInForm").hide();
        $(".headtext").html("Recuperar contraseña").css("font-size", "22px");
        $("#passRecover").fadeIn("slow");
        $("#Correo").focus();
    });
    $(".returnLogin").click(function(e){
        $("#passRecover").hide();
        $(".headtext").html("Iniciar sesión").css("font-size", "22px");
        $("#signInForm").fadeIn("slow");
        $("#alias").focus();
    });
    $("#formWrapper" ).delay(3000).fadeIn( 800 );
    $("#preloader" ).delay(2000).fadeOut( 300 );
    //$(".button-collapse").sideNav();
});
    