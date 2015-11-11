<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 02/11/2015
 * Time: 05:20 PM
 */?>
<html>
    <head>
    </head>
    <body>
            <?php
                echo "<form class='Preguntas'>";
                $miarray=$this->Datos_Faqs;
                for($i=0;$i< count($miarray);$i++){
                    echo "</br>";
                    echo "<div class='fondo'>";
                    foreach($miarray[$i] as $comentario=> $valor){
                       if($comentario==="asunto"||$comentario==="comentario"||$comentario==="Alias" ){
                           echo $valor;
                           echo "</br>";
                       }
                    }
                    echo "</div>";
                    echo"</br>";
                }
                echo "</form>";
            ?>
    </body>
</html>