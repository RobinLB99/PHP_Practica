<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING) - funcion que nos ocultara del documento los errores, noticias y alertas */
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            /* $_GET["error"] sera la varible que se evaluara para mostrar un mensaje donde se me indique los datos ingresados no coinciden con los datos de la base de datos.
                * Esto solo servira en el caso de haber ingresado datos al formulario y no en la primera carga de la pagina. */
            if ($_GET["error"]=="si") {
                echo "<span style='color: red; font-size:2em;'>El Usuario o contraseña son incorrectos. Verifica tus datos.</span>";
            }
        ?>
        <hgroup><h1>Envio de datos por POST</h1></hgroup>
        <!-- <form name="form_post" action="nombreArchivoDeValidacion.php" method="get/post" enctype="application/x-www-form-urlencoded">
            name -> nombre del formulario
            action -> establece el archivo donde se va enviar el formulario a para validar
            method -> establece el tipo de metodo de envio de datos
            enctype -> Establece el tipo de encriptación de datos
        -->
        <form name="form_post" action="val_data.php" method="post" enctype="application/x-www-form-urlencoded">
            <!-- Dentro del formulario deben ir los datos a enviar -->
            Usuario: <input type="text" name="user"><br><br>
            Contraseña: <input type="text" name="password"><br><br>
            <!-- <input type="radio" name="sexo_rdo" value="Hombre"> Hombre
                <input type="radio" name="sexo_rdo" value="Mujer"> Mujer
                    *Ambos deben contener el mismo nombre para que solo se marque una a la vez -->
            <input type="radio" name="sexo_rdo" value="Hombre"> Hombre
            <input type="radio" name="sexo_rdo" value="Mujer"> Mujer
            <!-- <input type="hidden" name="form_post" value="post">
                *Nos servira de comprobador para ralizar la validacion. Una vez que el formulario haya sido enviado este input creara la variable $_POST["form_post"] en el archivo php y sera la condicion para la ejecucion de la validacion de los datos. -->
            <input type="hidden" name="form_post" value="post"><br><br>
            <input type="button" value="Enviar" id="btn-enviar">
        </form>
        <script src="validar.js"></script>
    </body>
</html>