<?php
    class Inventario_model extends Model{
        function __construct(){
            parent:: __construct();
        }
        function _getProduct($data){
            return $this->db->procedure_S("Select_Producto",$data);
        }
    }