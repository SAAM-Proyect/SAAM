<?php
$thead = "<thead class='Proveedores' id ='Element'>
                    <tr>
                        <th colspan='7'>
                            Inventario de proveedores
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Codigo del proveedor</th>
                    </tr>
                    </thead>";
echo $thead;
for($i = 0; $i<count($this->getProveedores);$i++){
    $varia = "";

    foreach($this->getProveedores[$i] as $key => $valor){
        $varia .= (string)("<td style='text-align: right;'>".$valor."</td>");
    }

    echo "<tbody><tr class='Proveedores' id ='Element'>".$varia."</tr></tbody>";
}