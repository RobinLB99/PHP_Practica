<?php
    $user="RobinLB99";
    $password="0211994921";

    if (isset($_POST["form_post"])) {
        /* $_POST["user"] y $_POST["password"] - son variables creadas por los inputs al ser enviados por POST.
            -   Si el valor de $user es igual al valor de <input type="text" name="user"> y si el valor de $password es igual al valor de <input type="password" name="password" */
        if ($user==$_POST["user"] && $password==$_POST["password"]) {
            echo "Bienvenido <strong>".$user."</strong>";
        }
        else {
            /* header() - es un funcion para establecer cabezeras pero tambien para redirigir el flujo de la aplicacion */
            header("Location: form.php?error=si");
            // Me redirigue a la paguina principal del formulario con una variable por medio de la direccion.
        }
    }
?>