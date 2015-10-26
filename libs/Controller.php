<?php
    class Controller{
        function __construct() {
            Session::init();
            $this->view = new View();
            $this->loadModel();
        }
        function loadModel(){
            $model = get_class($this).'_model';
            $path = 'models/'.$model.'.php';
            
            if(file_exists($path)){
                require $path;
                $this->model = new $model();
            }
        }
    }