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
    <form name="sentFileServer" action="subir_archivo.php" method="post" enctype="multipart/form-data">
        <?php
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if ($_GET["error"] === "true") {
                echo "<span>Solo se puede subir archivos tipo .js<br></span>";
            }
        ?>
        <input type="file" name="file_up">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>