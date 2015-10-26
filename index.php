<?php

    require 'config.php';
    // -->Controller/Method/Params
    $url = (isset($_GET["url"])) ? $_GET["url"] : "Index/index";

    $url = explode("/", $url);

    if(isset($url[0])){$controller = $url[0];}
    if(isset($url[1])){ if($url[1] != ''){ $method = $url[1];} }
    if(isset($url[2])){ if($url[2] != ''){ $params = $url[2];} }
    
    spl_autoload_register(function($class){
        if(file_exists(LIBS.$class.".php")){
            require LIBS.$class.".php";
        }
    });
    
    $path = './controllers/'.$controller.'.php';
    
    if(file_exists($path)){
        require $path;
        $controller = new $controller();
        
        if(isset($method)){
            if(method_exists($controller, $method)){
                if(isset($params)){
                    $controller->{$method}($params);
                }else{
                    $controller->{$method}();
                    //header('Location: '.URL."Errors");
                }
            }else{
                header('Location: '.URL."Error");
            }
        }else{
            $controller->index();
        }
    }else{
        header('Location: '.URL."Error");
    }
    

