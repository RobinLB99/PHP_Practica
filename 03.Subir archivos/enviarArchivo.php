<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo al servidor con PHP</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <!-- Para subir un archivo el <form> deberara tener el metodo post y el tipo de encriptación sebera ser multipart/form-data, quedando de la sigueinte manera:
        method="post"
        enctype="multipart/form-data" -->
    <form name="form_subirArchivo" action="subirArchivo.php" method="post" enctype="multipart/form-data">
        <?php
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if ($_GET["error"] === "true") {
                echo "<span>Solo se puede subir archivos de texto plano</span>";
            }
        ?>
        <!-- Para subir un archivo debera tener un input tipo file para adjuntar un archivo quedando de la siguiente manera:
        <input type="file" name="nombreDelInput"> -->
        <input type="file" name="archivo_fls">
        <br><br>
        <!-- Tambien input de tipo submit para que nos procese el formulario -->
        <input type="submit" name="btn_enviar" value="Subir archivo">
    </form>
</body>
</html>