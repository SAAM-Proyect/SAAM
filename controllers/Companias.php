<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 02/11/2015
 * Time: 12:15 PM
 */
class Companias extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(Session::exist()){
            $this->view->render($this,'companias');
        }
        else{
            header('Location: '.URL);
        }
    }

}