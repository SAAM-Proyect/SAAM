<?php

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

}