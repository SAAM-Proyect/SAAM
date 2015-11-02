<?php require('views/header.php'); ?>

    <!--Contenido General del proyecto-->
    <div class="Conten-proyectos">
        <form >
            <span>Tipo de busqueda</span>
            <select class="Select_Tipos_Proyecto">
                <option value="Activo">Activos</option>
                <option value="Cancelados">Cancelados</option>
                <option value="Terminados">Terminados</option>
                <option value="Todos">Todos</option>
            </select>
        </form>


         <div class="card Estado_Proyecto A_Detalles">
            <div class="progress-radial progress-65">
                <div class="overlay">65%</div>
            </div>
            <div class="card-title" style="font-size: 20px !important;">Titulo Proyecto</div>
            <div >hola mundo</div>
            <div >hola mundo</div>
        </div>
    </div>


    <div class="sidebar_Detalles ">
        <!--Nombre Empresa-->
        <h5 class="Centrar_P">Nombre de la empresa</h5>

        <!--Nombre del Proyecto-->
        <h5 class="Centrar_P">Nombre del Proyecto</h5>

        <!--Descripcion del Proyecto-->
        <div >
            <h5 class="Centrar_P">Descripcion</h5>
            <div class="Justificar_P" style="padding: 20px">
                <p>este proyecto es de algun lugar dentro del shalalalalallalala</p>
            </div>
        </div>

        <!--Avance-->
        <div class="Justificar_P">
            hola mundo informacion  del avance
        </div>

        <div class="Centrar_P">Coordinador Proyecto</div>
        <!--Coordinador del Proyecto-->
        <div class="Centrar_P">
            <img class="I_D_F_E" src="<?php echo URL;?>public/img/Coordinador_Proyecto.jpg">
            <p class="I_D_N_E">Nombre del Coordinador</p>
        </div>

        <!--Empleados-->
        <div class="justificar_p">
            <span class="perfil">
                <img class="I_D_F_E" src="<?php echo URL;?>public/img/Coordinador_Proyecto.jpg">
                <p class="I_D_N_E">Empleado 1</p>
            </span>
            <span class="perfil">
                <img class="I_D_F_E" src="<?php echo URL;?>public/img/Coordinador_Proyecto.jpg">
                <p class="I_D_N_E">Empleado 2</p>
            </span>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.A_Detalles').click(function(e){
                e.preventDefault();
                $('.sidebar_Detalles').animate({"margin-right": 0+'px !important'},3500,'easeInOutQuad');
            });
        });
    </script    >
<?php require('views/footer.php'); ?>