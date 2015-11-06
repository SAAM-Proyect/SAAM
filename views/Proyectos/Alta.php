<?php require('views/header.php'); ?>
    <!--registro de Proyectos-->
<<<<<<< Updated upstream
    <form action="action" method="get">
        <span>Nombre del Proyecto</span>
            <input type="text" placeholder="Nombre del proyecto" name="Nombre">
        <span>Descripcion</span>
            <input type="text" name="Descripcion">
        <span>Precio</span>
        <input type="number" name="Precio">
    </form>
=======
    <div class="row">
        <form action="action" method="get" class="col s6 Centrar_P" name="Registro_Proyecto">
            <span></span>
            <span>Nombre del Proyecto</span>
                <input type="text" placeholder="Nombre del proyecto" name="Nombre">
            <span>Descripcion</span>
                <textarea type="text" name="Descripcion"></textarea>
            <span>Precio</span>
                <input type="number" name="Precio">
            <input type="submit" name="Enviar" id="Anadir_Proyecto">
        </form>
        <div class="mensaje_proyecto"></div>
        <div id="mycontainer_proyecto"></div>
    </div>
>>>>>>> Stashed changes
<?php require('views/footer.php'); ?>