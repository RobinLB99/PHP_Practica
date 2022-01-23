<?php
    
    $archivo = $_FILES["archivo_selec"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_selec"]["name"];

    if ($_FILES["archivo_selec"]["type"] === "application/vnd.ms-excel") {
        move_uploaded_file($archivo, $destino);
        echo "El archivo a sido subido con exito.";
    }
    else {
        header("Location: enviar_archivo.php?error=true");
    }
    
?>