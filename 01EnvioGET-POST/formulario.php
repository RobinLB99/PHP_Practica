<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de datos por GET y Post</title>
</head>
<body>
    <hgroup><h1>Formulario enviado por el método GET</h1></hgroup>
    <!--El formulario debe tener un nombre, un action que me indica a que url voy a mandar los datos del formulario,
    un metodo por el cual se van a enviar los datos
    y un enctype que es un tipo de incriptacion por el cual vamos a manda la informacion-->
    <!-- <form name="nombre" method="motodo_get/post" action="url_donde_se_envia_el_formulario" enctype="tipo_de_enccriptacion"-->
    <form name="envia-get_form" action="envia-datos.php" method="get" enctype="aplication/x-www-form-urlencoded">
        <label>Ingresa tu nombre:</label>
        <input type="text" name="nombre_text">
        <br>
        <label>Ingresa tu contraseña:</label>
        <!-- <input type="password">, sirve para dar una caja de texto diseñadas para el ingreso de las contraseñas donde se pueden ocultar a la vista. -->
        <input type="password" name="contraseña_text">
        <br>
        <!-- <input type="submit", es un tipo de boton que tiene como objetivo enviar el formulario. -->
        <input type="submit" name="envia_btn" value="Envia-GET">
    </form>

    <!--
        Con el metodo GET, cuando se envie el formulario, en la URL se mostraran despues de la extension .php? las variables del formulario de las cuales tenemos usuario: UsuarioEjemplo y contraseña:passwordEjemplo123, que dando de la siguiente manera:
            http://localhost/Cursos/01EnvioGET-POST/envia-datos.php?nombre_text=UsuarioEjemplo&contraseña_text=passwordEjemplo123&envia_btn=Envia-GET
    -->

    <hgroup><h1>Formulario enviado por el método POST</h1></hgroup>
    <form name="envia-post_form" action="envia-datos.php" method="post" enctype="aplication/x-www-form-urlencoded">
        <label>Ingresa tu nombre:</label>
        <input type="text" name="nombre_text">
        <br>
        <label>Ingresa tu contraseña:</label>
        <input type="password" name="contraseña_text">
        <br>
        <input type="submit" name="envia_btn" value="envia-post">
    </form>
    <!--
        Con el metodo POST, tras enviar el formulario, los datos no se mostraran el la URL debido a que estos fueron encriptados gracias a este metodo quedando la URL de la siguiente manera:
            http://localhost/Cursos/01EnvioGET-POST/envia-datos.php
     -->
</body>
</html>