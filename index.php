<?php

include_once 'Controller/controller.php';
include_once 'Config/conexion.php';

$controller = new Controller();

if(!isset($_REQUEST['c'])){
    $controller->index();
}
else{
    $action = $_REQUEST['c'];
    call_user_func(array($controller, $action));
}

?>