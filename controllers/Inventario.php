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
        function proveedores(){
            if(Session::exist()){
                $this->view->Proveedores = $this->model->_getProveedores();
                return $this->view->render($this,"proveedores");
            }
        }
        function inventario(){
            if(Session::exist()){
                $this->view->getProveedores = $this->model->_getProveedores();
                $this->view->getProducts = $this->model->_getProducts();
                if(isset($_GET["codProducto"])){
                    $data["codProducto"] = $_GET["codProducto"];
                    $this->view->Producto = $this->model->_getProduct($data)[0];
                }
                $this->view->render($this, 'inventario');
            }else{
                header("Location: ".URL);
            }
        }
        function productos(){
            $this->view->getProducts = $this->model->_getProducts();
            return $this->view->render($this, "productos");
        }
    }