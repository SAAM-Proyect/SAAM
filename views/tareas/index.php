<?php
/**
 * Created by PhpStorm.
 * User: Dark_HaseO
 * Date: 27/10/2015
 * Time: 11:12 PM
 */
require('views/header.php'); ?>

<html>
<head>
</head>
<body>
<script type="text/javascript">
    var posiciones = 4;
    var nombre_Pos= 'irvin_pro';
    document.write("<div class='inicial'><div class='text'>Tareas</div></div>")
    document.write("<div class='cont'>")
    for (var i=1;i<=posiciones;i++){
        document.write("<div class='posicion'>")
            document.write("<div class='icon'>")
                document.write("<div class='imag'>")
                document.write("</div>")
            document.write("</div>")
        document.write("<div class='textpos'>" + nombre_Pos + "</div>")
        document.write("</div>")
        if (i == posiciones){
            document.write("<div class='relleno'></div>")
        }
    }
    document.write("</div>")
</script>
</body>
</html>





<?php require('views/footer.php'); ?>
