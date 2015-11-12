<?php

class Producto{
    public $id;
    public $imagen;
    public $Nombre;
    public $Precio;
    public $descripcion;

}
for($i = 0; $i <count($this->Productos); $i++){
    $varia = "";
    $product = new Producto();
    foreach($this->Productos[$i] as $key => $valor) {

        if($key=="codProducto"){
            $product->id = $valor;
        }
        if ($key == "Nombre_Producto") {
            $product->imagen ="http://lorempixel.com/400/200/";
            $product->Nombre = $valor;

        }
        if ($key == "Descripcion_Producto") {
            $product->descripcion = $valor;

        }
        if ($key == "existencias") {
            $product->Precio = $valor;

        }
    }
        foreach($product as $key => $val){
            if($key == "id"){
                $varia .= "<figcaption class='idd'>". $val. "</figcaption>";
            }
            else if($key == "imagen"){
                $varia .= "<img class ='prueba' src='". $val."'/>";
            }else{
                $varia .= "<figcaption>". $val. "</figcaption>";
            }
            //$variados = (string)("<figure>".$varia."</figure>");
        }

    //echo (string)("<div class ='hijos'><figure style ='overflow: auto'> <img src ='http://lorempixel.com/400/200/sports'/> <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi autem commodi deserunt dignissimos, dolore eius eum possimus repellendus sit! Ad aspernatur consequuntur, incidunt minima sint ut vitae voluptatem! Eaque?</figcaption> <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem est id ipsum laudantium maxime nesciunt saepe sed sequi! Dicta laborum nobis provident quia voluptates! Enim eos laudantium saepe sint velit.</figcaption> </figure></div>");
    echo (string)("<div class ='hijos'><figure style ='overflow: hidden'>".$varia."</figure></div>");
}

/*for($i = 0; $i<count($this->Productos);$i++){

}*/
