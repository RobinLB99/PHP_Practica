<!DOCTYPE html>
<html lang="en">
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
    <form name="enviaArchivo" method="post" action="subir_archivo.php" enctype="multipart/form-data">
        <?php
            error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
            if ($_GET["error"] === "true") {
                echo "<span>Solo se puede subir achivos tipo cvs</span><br>";
            }
        ?>
        <input type="file" name="archivo_selec" id="archivo_subir">
        <br><br>
        <input type="submit" value="Subir archivo">
    </form>
</body>
</html>