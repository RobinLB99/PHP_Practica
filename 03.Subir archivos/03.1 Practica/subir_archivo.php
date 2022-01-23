<?php
    $archivo = $_FILES["file_up"]["tmp_name"];
    $destino = "archivos/".$_FILES["file_up"]["name"];

    if ($_FILES["file_up"]["type"] === "text/javascript") {
        move_uploaded_file($archivo,  $destino);
        echo "Archivo subido con exito";
    }
    else {
        header("location: enviar_archivo.php?error=true");
    }

?>