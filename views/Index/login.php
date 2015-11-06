<?php require 'views/head.php';?>
    <div class="contenedor">
        <div class="area1">
            <script type="text/javascript">
                var posImg = 0;
                var total = 0;
                $(document).ready(function(){
                    posImg = 1;
                    total = $("#SliderPrincipal").children().length;
                    $(".parte2_slider"+posImg).css({"position":"absolute", "display":"block", "max-width":"700px"}).delay(100).animate({"margin-left": 0+'px'},1600,'easeInQuad');
                    $(".parte2_slider"+posImg).delay(4500).animate({"margin-left": -1500+'px'},1300,'easeOutQuad');
                    posImg++;
                });
                window.setInterval(function slider(){
                    if(posImg > total){ posImg = 1; }
                    if(posImg < 1){ posImg = total; }
                    $(".parte2_slider"+posImg).css({"position":"absolute", "display":"block", "max-width":"700px"}).delay(100).animate({"margin-left": 0+'px'},1600,'easeInQuad');
                    $(".parte2_slider"+posImg).delay(4500).animate({"margin-left": -1500+'px'},1300,'easeOutQuad');
                    posImg= posImg+1
                },5200);
            </script>
            <div id="SliderPrincipal">
                <div class="parte2_slider1 oculto">
                    <p class="titulo_Slider">Nuestos productos</p>
                    <p class="subtitulo_Slider">Nadie quiere una vida complicada. Con los diferentes productos de SAAM, tendrás todas las herramientas que necesitas para lograr tus metas profesionales de la forma más fácil.</p>
                    <p>Olvídate de las cantidades interminables de papeleo y correo electrónico. SAMM ofrece un sistema efectivo de proyectos y tareas para organizar tu empresa en un solo lugar.</p>
                    <img id="tv" src="public/img/ss6_03.png">
                </div>
                <div class="parte2_slider2 oculto">
                    <p class="titulo_Slider">Nuestos servicios</p>
                    <p class="subtitulo_Slider">Nadie quiere una vida complicada. Con los diferentes productos de SAAM, tendrás todas las herramientas que necesitas para lograr tus metas profesionales de la forma más fácil.</p>
                    <p>Olvídate de las cantidades interminables de papeleo y correo electrónico. SAMM ofrece un sistema efectivo de proyectos y tareas para organizar tu empresa en un solo lugar.</p>
                    <img id="tv" src="public/img/ss6_03.png">
                </div>
                <div class="parte2_slider3 oculto">
                    <p class="titulo_Slider">Nuestos clientes</p>
                    <p class="subtitulo_Slider">Nadie quiere una vida complicada. Con los diferentes productos de SAAM, tendrás todas las herramientas que necesitas para lograr tus metas profesionales de la forma más fácil.</p>
                    <p>Olvídate de las cantidades interminables de papeleo y correo electrónico. SAMM ofrece un sistema efectivo de proyectos y tareas para organizar tu empresa en un solo lugar.</p>
                    <img id="tv" src="public/img/ss6_03.png">
                </div>
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
                    <form id="signInForm" action="<?php echo URL; ?>Usuario/signIn" name="signIn" method="post" style="z-index: 999999999">
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