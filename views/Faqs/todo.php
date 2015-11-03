<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 02/11/2015
 * Time: 05:20 PM
 */
$miarray=$this->Datos_Faqs;
for($i=0;$i< count($miarray);$i++){
    echo "Faqs num : ".($i+1);
    echo "</br>";
    echo $miarray[0]["Alias"];
    foreach($miarray[$i] as $comentario=> $valor){
        echo $comentario.": ".$valor;
        echo "</br>";
    }
    echo "</br>";echo "</br>";
}