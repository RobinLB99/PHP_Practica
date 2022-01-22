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
        error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);    
        if ($_GET["error"] === "true") {
            echo "Los datos que ingresaste no son correctos. Por favor, revisa el usuario, contraseña o sexo.";
        }
    ?>
    <hgroup><h1>Envio de datos por metodo GET</h1></hgroup>
    <form name="form_get" action="ValidacionGET.php" method="get" enctype="aplication/x-www-form-urlencoded">
        Usuario: <input type="text" name="user">
        <br><br>
        Contraseña: <input type="password" name="password">
        <br><br>
        Sexo:
        <input type="radio" name="sexo" value="H"> Hombre
        <input type="radio" name="sexo" value="M"> Mujer
        <br><br>
        <input type="hidden" name="btn_hidden">
        <input type="button" id="btn_enviar" value="Enviar">
    </form>
    <script src="ValidacionScript.js"></script>
</body>
</html>