<?php
class Proyectos extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(Session::exist()){
            $this->view->render($this,'index');
        }else{
            header("Location: ".URL);
        }
    }
}