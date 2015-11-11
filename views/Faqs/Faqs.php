<?php require('views/header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 10/11/2015
 * Time: 08:29 PM
 */
?>
<html>
<head>
    <title>FAQS</title>
</head>
<body>
</br>
<form name="faqs_form" id="form_pregunta">

    <input type="text" name="Asunto" placeholder="Asunto"/>
    <textarea type="text" name="Pregunta" placeholder="Comentario" ></textarea>
    <textarea type="text" name="Respuesta" placeholder="Respuesta" ></textarea>
    <input id="crear" type="submit" name="Enviar" value="Comentar"/>
</form>
</br>
<div id="mycontainer"></div>
<div class="mensajex"></div>
</body>
</html>
<?php require("views/footer.php"); ?>









