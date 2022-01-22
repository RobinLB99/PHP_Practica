<?php
    $user="RobinLB99";
    $password="0211994921";
    $sexo="H";

    if (isset($_GET["btn_hidden"])){
        if ($user === $_GET["user"] && $password === $_GET["password"] && $sexo === $_GET["sexo"]) {
            echo "Bienvenido ".$user." Accediste por metodo GET.";
        }
        else {
            header("Location: formGET.php?error=true");
        }
    }
?>