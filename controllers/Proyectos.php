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
    function alta(){
        if(Session::exist()){
            $this->view->render($this,'alta');
        }else{
            header("Location: ".URL);
        }
    }
}