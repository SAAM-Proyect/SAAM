<?php
    class Inventario extends Controller{
        function __construct(){
            parent:: __construct();
        }
        function index(){
            if(Session::exist()){
                header("Location: ".URL."/Inventario/inventario");
            }else{
                header("Location: ".URL);
            }
        }
        function _getProduct(){
            $data["codProducto"] = $_POST["codProducto"];
            return $this->model->_getProduct($data);
        }
        function inventario(){
            $this->view->render($this, 'inventario');
        }
    }