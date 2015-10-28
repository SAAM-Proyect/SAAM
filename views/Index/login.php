<?php require 'views/head.php';?>
    <div class="contenedor">
        <div class="area1">
            <div class="sliderChild">
                <ul class="bxslider">
                    <li><img src="<?php echo URL; ?>public/img/slider/1.jpg" /></li>
                    <li><img src="<?php echo URL; ?>public/img/slider/2.jpg" /></li>
                    <li><img src="<?php echo URL; ?>public/img/slider/3.jpg" /></li>
                    <li><img src="<?php echo URL; ?>public/img/slider/4.jpg" /></li
                </ul>
            </div>
        </div>
        <div class="area2">
            <div class="contenedorlogin">
                <div class="centerdiv">
                    <div class="imagen-login"><img src="public/img/noUserImg.png"></div>
                    <p class="headtext">Iniciar sesión</p>
                    <form id="passRecover">
                        <input id="Correo" name="Correo" type="email" class="validate button-email" placeholder="Correo"/>
                        <button id="passRecoverBtn" name="sendEmail" class="waves-effect waves-light cien" type="submit">Enviar correo</button>
                        </br><div class="returnLogin"><a href="#">Regresar al inicio de sesión</a></div>
                        </br><div class="mensaje">Se enviará un mensaje a su correo electrónico con el cuál podrá solicitar y/o generar una nueva contraseña.</div>
                    </form>
                    <form id="signInForm" action="<?php echo URL; ?>User/signIn" name="signIn" method="post" style="z-index: 999999999">
                        <input id="alias" name="alias" type="text" class="validate button-Users" placeholder="Nombre de usuario"/>
                        <input id="contrasena" name="contrasena" type="password" class="validate button-security" placeholder="Contraseña"/>
                        <button id="signInBtn" name="signInBtn" class="waves-effect waves-light cien" type="submit">Ingresar</button>
                        <div class="passRecover"><a href="#">¿Has olvidado tu contraseña?</a></div>
                    </form >
                    <div class="errorX"></div>
                </div>
            </div>
        </div>
    </div>
<?php require('views/foot.php'); ?>