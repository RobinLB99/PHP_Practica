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
        if ($_GET["error"]=="si") {
            echo "<span style='color: red; font-size:2em;'>El Usuario o contraseña son incorrectos. Verifica tus datos.</span>";
        }
    ?>
    <h1>Formulario de datos GET</h1>
    <form name="valid_data_GET_form" action="validar_datos.php" method="GET" enctype="application/x-www-form-urlencoded">
        <br>
        Ingresa tu usuario:
        <input type="text" name="user_text">
        <br>
        Ingresa tu contraseña:
        <input type="text" name="password_text">
        <br>
        <input type="radio" name="sexo_rdo" value="M">
        Masculíno
        <input type="radio" name="sexo_rdo" value="F">
        Femenino
        <br><br>
        <input type="hidden" name="enviar_hdn" value="get">
        <input id="enviar_get" type="button" name="enviar_btn" value="Enviar x GET">
    </form>

    <h1>Formulario de datos POST</h1>
    <form name="valid_data_POST_form" action="validar_datos.php" method="POST" enctype="application/x-www-form-urlencoded">
        <br>
        Ingresa tu usuario:
        <input type="text" name="user_text">
        <br>
        Ingresa tu contraseña:
        <input type="text" name="password_text">
        <br>
        <input type="radio" name="sexo_rdo" value="M">
        Masculíno
        <input type="radio" name="sexo_rdo" value="F">
        Femenino
        <br><br>
        <input type="hidden" name="enviar_hdn" value="post">
        <input id="enviar_post" type="button" name="enviar_btn" value="Enviar x POST">
    </form>
    <script src="validacion.js"></script>
</body>
</html>