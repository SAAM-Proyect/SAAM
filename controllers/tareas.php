<?php
/**
 * Created by PhpStorm.
 * User: Dark_HaseO
 * Date: 27/10/2015
 * Time: 11:11 PM
 */
class tareas extends Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render($this,'index');
    }
}