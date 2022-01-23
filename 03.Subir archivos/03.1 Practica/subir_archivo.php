<?php
    
    $archivo = $_FILES["archivo_selec"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_selec"]["name"];

    if ($_FILES["archivo_selec"]["type"] === "application/vnd.ms-excel") {
        echo "El archivo a sido subido con exito.";
    }
    else {
        header("Location: enviar_archivo.php?error=true");
    }
    
?>