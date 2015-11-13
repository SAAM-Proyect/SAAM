<?php require('views/header.php'); ?>
    <?php require('views/required/sidebar.php'); ?>
    <div class="page-container">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">
                            Inicio <small>Datos principales</small>
                        </h3>
                    </div>
                </div>
                <div id="dashboard">
                    <div class="formWrapper">
                        <?php echo Session::getValue('U_NAME'); ?>
                        <button id="closeSessionBtn">Cerrar Session</button>
                        <button id="buttonProfile">Ver perfil</button>
                    </div>

                </div>
        </div>
    </div>
<?php require('views/footer.php'); ?>