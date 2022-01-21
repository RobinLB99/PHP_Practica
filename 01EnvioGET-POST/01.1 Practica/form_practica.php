<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hgroup><h1>Envio de datos por GET</h1></hgroup>
    <form name="form_pract_get" action="validar_practica.php" method="get" enctype="aplication/x-www-form-urlencoded">
        Usuario: <input type="text" name="user"><br><br>
        Contraseña: <input type="text" name="password"><br><br>
        Sexo: <input type="radio" name="sexo" value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Femenino
            <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <hgroup><h1>Envio de datos por POST</h1></hgroup>
    <form name="form_pract_Post" action="validar_practica.php" method="post" enctype="aplication/x-www-form-urlencoded">
        Usuario: <input type="text" name="user"><br><br>
        Contraseña: <input type="text" name="password"><br><br>
        Sexo: <input type="radio" name="sexo" value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Femenino
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>