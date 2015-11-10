<?php require('views/header.php'); ?>

<html>
<head>
    <title>FAQS</title>
</head>
<body>
<div id="mycontainer"></div>
<form name="faqs_form">
    <input type="text" name="Asunto" placeholder="Asunto"/>
    <textarea type="text" name="Pregunta" placeholder="Comentario" ></textarea>
    <textarea type="text" name="Respuesta" placeholder="Respuesta" ></textarea>
    <input id="crear" type="submit" name="Enviar" value="Comentar"/>
</form>
<div class="mensajex"></div>
</body>
</html>

<?php require("views/footer.php"); ?>






