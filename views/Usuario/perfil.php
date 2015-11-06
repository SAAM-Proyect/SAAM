<?php require('views/header.php'); ?>
<?php echo $this->userData['password'] = ""; ?>
    <div class="row">
        <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
        <div class="col s6 offset-s6 grid-example"><span class="flow-text">6-columns (offset-by-6)</span></div>
    </div>
    <div id="backPerfil">
        <img src="<?php echo URL; ?>public/img/profile.jpg" draggable="false" />
        <div class="">Hola2</div>
        <div class="infoProfile">Hola</div>
    </div>
    <div class="separatorProfile"></div>
    <div class="formWrapper">
        <?php
        $tipo = "Usuario normal";
        if($this->userData['tipo']==1){
            $tipo = "Administrador";
        }
        ?>
        <form name="profileForm" class="fancyForm" style="margin-top: 50px;">
            <input type="text" name="name" value="<?php echo $this->userData['Nombre']; ?>" placeholder="Nombre">
            <input type="text" name="username" value="<?php echo $this->userData['Apellido']; ?>" placeholder="Username">
            <input type="email" name="email" value="<?php echo $this->userData['Correo']; ?>" placeholder="Email">
            <input type="text" name="password" value="<?php echo $tipo; ?>" placeholder="Password" required="required">
            <button onclick="updateUser(<?php echo $this->userData['id_Usuario']; ?>)">Actualizar</button>
            <button onclick="deleteUser(<?php echo $this->userData['id_Usuario']; ?>)">Darme de baja</button>
            <?php  //echo count($this->userData); ?>
        </form>
    </div>
<script>
    $(function(){
       $('#buttonBack').click(function(){
          document.location = "<?php echo URL; ?>";
       });
       $('#buttonProyects').click(function(e){
           e.preventDefault();
           document.location = "<?php echo URL.'Proyects';?>";
       });
    });
    function updateUser (id) {
        //alert("Usted va a actualizar el usuario con id: "+id);
        var name = $('form[name=profileForm] input[name=name]')[0].value;
        name=(name != '<?php echo $this->userData['Alias']; ?>' && name != '') ? name : '<?php echo $this->userData['Alias']; ?>';
        var username = $('form[name=profileForm] input[name=username]')[0].value;
        username=(username != '<?php echo $this->userData['Alias']; ?>' && username != '') ? username : '<?php echo $this->userData['Alias']; ?>';
        var email = $('form[name=profileForm] input[name=email]')[0].value;
        email=(email != '<?php echo $this->userData['tipo']; ?>' && email != '') ? email : '<?php echo $this->userData['tipo']; ?>';
        var password = $('form[name=profileForm] input[name=password]')[0].value;
        if(password!='' && password!=null)
        {
            password= (password != '<?php echo $this->userData['Contrasena']; ?>' && password != '') ? password : '<?php echo $this->userData['Contrasena']; ?>';
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>User/update",
                data: {id: id, name: name, username: username, email: email, password: password}
            }).done(function(response){
                //alert(response);
                if(response == true){
                    //alert("Actualización Exitoso!");
                    //document.location= "<?php echo URL; ?>";
                    //document.location = "<?php echo URL; ?>User/destroySession";
                }else{
                    alert(response);
                }
            });
        }
        else
        {
            alert("Llene el campo de la contraseña");
        }
    }
    function deleteUser (id) {
        var response = confirm("¿Seguro que quiere darse de baja? User id: "+id);
        if(response){
            alert("Es una lástima que usted se haya salido de nuestra aplicación");
        }
    }
</script>
<?php require('views/footer.php'); ?>