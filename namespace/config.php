<?php

spl_autoload_register(function($className){

    var_dump($className) . "<br>";

    $classDir = "class";
    $filename = $classDir . DIRECTORY_SEPARATOR . $className . ".php";

    if (file_exists($filename)) {

        require_once($filename);

    }

});


?>