<?php
$user="Robin";
$password="0944149020";

if(isset($_GET["enviar_hdn"])){
    if ($user==$_GET["user_text"] && $password==$_GET["password_text"]) {
        echo "Bienvenido ".$user;
        echo "<br>Has accedido por el metodo GET";
    }
    else {
        header("Location: formulario.php?error=si");
    }
}
if(isset($_POST["enviar_hdn"])){
    if ($user==$_POST["user_text"] && $password==$_POST["password_text"]) {
        echo "Bienvenido ".$user;
        echo "<br>Has accedido por el metodo POST";
    }
    else {
        header("Location: formulario.php?error=si");
    }
}
?>