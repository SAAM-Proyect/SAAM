<?php

$thead = "<thead class='Productos' id ='Element'>
                    <tr>
                        <th colspan='7'>
                            Inventario de productos
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Codigo del producto</th>
                        <th>Proveedor</th>
                        <th>Stock</th>
                        <th>Precio compra</th>
                        <th>Precio venta</th>
                    </tr>
                    </thead>";
echo $thead;
for($i = 0; $i<count($this->getProducts);$i++){
    $varia = "";

    foreach($this->getProducts[$i] as $key => $valor){
        $varia .= (string)("<td>".$valor."</td>");
    }

    echo "<tbody><tr class='Productos' id ='Element'>".$varia."</tr></tbody>";
}
