<?php
class drag extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(session::exist()){
            $this->view->render($this,'posiciones');
        }else{

        }
    }
}