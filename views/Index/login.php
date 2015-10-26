<?php require 'views/head.php';?>
<div class="contenedor">
    <div class="area1"></div>
    <div class="area2">
        <div class="contenedorlogin">
            <div class="centerdiv">
                <form id="signInForm" action="<?php echo URL; ?>User/signIn" name="signIn" method="post" style="">
                    <input id="alias" name="alias" type="text" class="validate" placeholder="Nombre de usuario">
                    <input id="contrasena" name="contrasena" type="text" class="validate" placeholder="Contraseña">
                    <button id="signInBtn" name="signInBtn" class="btn waves-effect waves-light grey darken-2 cien" type="submit">Ingresar</button>
                </form >
            </div>
        </div>
    </div>
</div>
<?php require('views/foot.php'); ?>