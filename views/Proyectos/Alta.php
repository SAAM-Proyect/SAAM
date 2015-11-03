<?php require('views/header.php'); ?>
    <!--registro de Proyectos-->
    <form action="action" method="get">
        <span>Nombre del Proyecto</span>
            <input type="text" placeholder="Nombre del proyecto" name="Nombre">
        <span>Descripcion</span>
            <input type="text" name="Descripcion">
        <span>Precio</span>
        <input type="number" name="Precio">
    </form>

<?php require('views/footer.php'); ?>