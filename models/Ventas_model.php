<?php
class Ventas_model extends Model{
    function __construct(){
        parent:: __construct();
    }
    function _getProductos()
    {
        return $this->db->Views_All("Select_Productos");
    }
}
