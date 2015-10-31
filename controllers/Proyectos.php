<?php
class Proyectos extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render($this,'index');
    }


}