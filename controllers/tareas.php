<?php
/**
 * Created by PhpStorm.
 * User: Dark_HaseO
 * Date: 27/10/2015
 * Time: 11:11 PM
 */
class Tareas extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if (Session::exist()){
            $this->view->render($this,'index');
        }
        else{
            header("Location: ".URL);
        }
    }
}