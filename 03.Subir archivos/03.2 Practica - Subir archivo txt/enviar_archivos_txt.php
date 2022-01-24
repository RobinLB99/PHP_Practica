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
    <form name="enviar_archivos_txt" action="subir_archivos_txt.php" method="post" enctype="multipart/form-data">
        <p><strong>Cargue el archivo .txt:</strong></p>
        <?php
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if ($_GET["error"] === "true") {
                echo "<span>El archivo incorrecto. Debe subir un archivo TXT</span>";
            }
        ?>
        <input type="file" name="file_txt">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body
</html>