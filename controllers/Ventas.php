<?php
$_SESSION['array'] = array();
$_SESSION['hola'] = "HOLA";
class Ventas extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(Session::exist()){
            $this->view->render($this,'ventas');
        }
        else{
            header('Location: '.URL);
        }
    }

    function productos(){
        $this->view->Productos = $this->model->_getproductos();
        return $this->view->render($this,"productos");
    }


    public function ventasProducto(){
        $this->view->array = array();

        return $this->view->render($this,"ventasProducto");
    }
}