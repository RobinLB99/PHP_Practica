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
    <form name="sent_files" action="subir_archivo_docx.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file_up">
        <br>
        <?php
        error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if ($_GET["error"]==="true") {
                echo "<span>No se puede subir este archivo. El tipo de archivo permitido es .docx</span>";
            }
        ?>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>