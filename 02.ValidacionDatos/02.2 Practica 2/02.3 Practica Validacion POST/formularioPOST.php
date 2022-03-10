<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de datos por POST</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <hgroup><h1>Validacion de datos por POST</h1></hgroup>
    <form name="form_data_POST" action="validacionPOST.php" method="post" enctype="application/x-www-form-urlencoded">
        <?php
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if($_GET["error"] == "true"){
                echo "<span>No se ha podido acceder. Por favor revise el usuario y contraseña</span><br><br>";
            }
        ?>
        Usuario: <input type="text" name="user_text"><br><br>
        Contraseña: <input type="password" name="password_text"><br><br>
        Sexo:
        <input type="radio" name="rdo_sexo" value="H"> Hombre
        <input type="radio" name="rdo_sexo" value="M"> Mujer
        <input type="hidden" name="hidden"><br><br>
        <input type="button" value="Acceder" id="enviar">
    </form>
    <script src="validacion_script.js"></script>
</body>
</html>