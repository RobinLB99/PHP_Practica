<?php
    $usuario = "Usuario1";
    $contrasena = "contrasena123";
    $sexo =  "H";

    if(isset($_POST["hidden"])){
        if($usuario == $_POST["user_text"] && $contrasena == $_POST["password_text"] && $sexo == $_POST["rdo_sexo"]){
            echo 'Bienvenido <strong>'.$usuario.'</strong>';
            echo '<br>Has accedido por el metodo Post';
        }
        else{
            header("Location: formularioPOST.php?error=true");
        }
    }
?>