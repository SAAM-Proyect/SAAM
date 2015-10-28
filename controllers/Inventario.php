<?php
    class Inventario extends Controller{
        function __construct(){
            parent:: __construct();
        }
        function _getProduct(){
            $data["codProducto"] = $_POST["codProducto"];
            return $this->model->_getProduct($data);
        }
    }