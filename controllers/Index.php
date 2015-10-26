<?php
    class Index extends Controller{
        
        function __construct() {
            parent::__construct();
        }
        function index(){
            //print '</br>'.Hash::create("sha512", "perro", "millave");*/
            if(Session::exist()){
                //print 'Existe la sesión';
                //Si existe una sesión entonces vamos a cargar una vista 
                $this->view->render($this,'index');
                //header("Location: ".URL."User/index/");
            }  else {
                //print 'No existe la sesión';
                $this->view->render($this,'login');
            }
        }
        function killItWithfire(){
            Session::destroy();
        }
    }