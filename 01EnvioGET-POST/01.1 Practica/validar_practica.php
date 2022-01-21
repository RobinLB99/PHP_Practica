<?php

    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $userGET=$_GET["user"];
    $userPOST=$_POST["user"];

    if (isset($_GET["enviar"])) {
        echo "Bienvenido ".$userGET.". Has accedido por el metodo GET";
    }
    else if (isset($_POST["enviar"])) {
        echo "Bienvenido ".$userPOST.". Has accedido por el metodo POST";
    }
?>