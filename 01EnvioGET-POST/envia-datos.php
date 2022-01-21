<?php
    /*
    $_GET es una variable global de tipo arreglo que se crea al enviar algo por el metodo GET
    $_POST es una variable global de tipo arreglo que se crea al enviar algo por el metodo POST
    */
    /*La funcion isset(), me va a evaluar si se ha definido (creado) la varible que tiene como parametro*/
    if(isset($_GET["envia_btn"])){
        echo "Los datos los envíaste por el método GET, los cuales son: <br><br> Usuario: ".$_GET["nombre_text"]."<br>Contraseña: ".$_GET["contraseña_text"];
    }
    else if(isset($_POST["envia_btn"])){
        echo "Los datos los envíaste por el método POST, los cuales son: <br><br> Usuario: ".$_POST["nombre_text"]."<br>Contraseña: ".$_POST["contraseña_text"];
    }
?>