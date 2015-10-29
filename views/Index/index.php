<?php require('views/header.php'); ?>
<div class="formWrapper">
    <?php echo Session::getValue('U_NAME'); ?>
    <button id="closeSessionBtn">Cerrar Session</button>
    <button id="buttonProfile">Ver perfil</button>
</div>
<script>
    $(function(){


        $('#id').addClass('hover').removeClass('normal').fadeIn("slow");
        $('#closeSessionBtn').click(function(){
            document.location = "<?php echo URL; ?>User/destroySession";
        });
        $('#buttonProfile').click(function(){
            document.location = "<?php echo URL; ?>User/profile";
        });
    });
</script>  
<?php require('views/footer.php'); ?>