<?php

$url = isset($_GET['url']) 
    ? explode('/', $_GET['url']) 
    : ['home'];

$controller = ucfirst($url[0]) . 'Controller';

if(file_exists("app/controllers/$controller.php")){

    require_once "app/controllers/$controller.php";

    $controller = new $controller();

    $metodo = $url[1] ?? 'index';

    if(method_exists($controller, $metodo)){

        $parametros = array_slice($url, 2);

        call_user_func_array(
            [$controller, $metodo],
            $parametros
        );

    } else {

        echo "Método não encontrado!";
    }

} else {

    echo "Controller não encontrado!";
}
