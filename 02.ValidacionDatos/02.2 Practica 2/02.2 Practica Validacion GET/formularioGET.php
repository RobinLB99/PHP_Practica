<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <hgroup><h1>Validacion de datos por el metodo GET</h1></hgroup>
    <?php
        error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
        if($_GET["error"] == "true"){
            echo "<span>Por favor, revise los datos ingresados</span><br>";
        }
    ?>
    <form name="form_data_get" action="validacion_datos_GET.php" method="get" enctype="application2/x-www-form-urlencoded">
        Usuario: <input type="text" name="user_text"><br><br>
        Contraseña: <input type="password" name="password_text"><br><br>
        Sexo:
        <input type="radio" name="sexo" value="H"> Hombre
        <input type="radio" name="sexo" value="M"> Mujer
        <input type="hidden" name="hidden">
        <br><br>
        <input type="button" value="Enviar" id="enviar">
    </form>
    <script src="valid_script.js"></script>
</body>
</html>