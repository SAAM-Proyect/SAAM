<?php

/**
 * Class Proyectos
 */
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

    function modificaciones(){
        if(Session::exist()){
            $this->view->render($this,'modificaciones');
        }else{
            header("Location: ".URL);
        }
    }
/*
    function insertar(){
        $usuario["id"]=Session::getValue("ID");
        $this->view->userData = $this->model->getUser($usuario)[0];
        $data["Nombre"]=
        $data["Descripcion"]=$_POST["Pregunta"];
        $data["Estado"]=$_POST["Asunto"];
        $data["Fecha_finalizacion"]=1;
        $data["Fecha_inicio"]=date("Y-m-d");
        $data["Precio"]=
        $data["Porcentaje"]=
        $data["Balance"]=
    }*/
}