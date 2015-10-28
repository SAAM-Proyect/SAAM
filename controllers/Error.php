<?php
/**
 * Created by PhpStorm.
 * User: Horacio
 * Date: 09/10/2015
 * Time: 09:32 PM
 */
class Error extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view->render($this,'index');
    }
}