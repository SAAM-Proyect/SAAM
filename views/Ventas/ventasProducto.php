<?php
$text ="";
$id = $_POST['id'];
$aux = array($id,"hola");
//array_push($this->array,$aux);
array_push($_SESSION["ArrayProductos"],$aux);
if($id!=""){

}
for($i = 0;$i< count($_SESSION["ArrayProductos"]);$i++){
    $text .="<tr>";
    foreach($_SESSION["ArrayProductos"][$i] as $key => $valor){
        $text .= "<td>".$valor."</td>";
    }
    $text .= "</tr>";

}
echo "<table><tbody>".$text."</tbody></table>";
/*for($i =0;$i<count($_SESSION["ArrayProductos"]);$i++){
    foreach($_SESSION["ArrayProductos"][0] as $key=>$valor){
        $text.= "<p>".$valor."</p>";
    }
}*/

