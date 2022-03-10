<?php
    $usuario = "Usuario1";
    $contrasena = "contrasena123";
    $sexo = "H";

    if(isset($_GET["hidden"])){
        if($usuario == $_GET["user_text"] && $contrasena == $_GET["password_text"] && $sexo == $_GET["sexo"]){
            echo "Bienvenido <strong>".$usuario."</strong>";
            echo "<br>Has accedido por el metodo GET";
        }
        else{
            header("Location: formularioGET.php?error=true");
        }
    }
?>