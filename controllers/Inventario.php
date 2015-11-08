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
                $this->view->getProveedores = $this->model->_getProveedores();
                return $this->view->render($this,"select_proveedores");
            }
        }
        function inventario(){
            if(Session::exist()){

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
        function ventas(){
            $this->view->getVentas = $this->model->_getVentas();
            return $this->view->render($this,"select_ventas");
        }
        function cortes(){
            $this->view->getCortes = $this->model->_getCortes();
            return $this->viewrender($this,"select_cortes");
        }
        function productos(){
            $this->view->getProducts = $this->model->_getProducts();
            return $this->view->render($this, "select_productos");
        }
    }