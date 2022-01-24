<?php
    $archivo = $_FILES["file_up"]["tmp_name"]; // Archivo cargado.
    $directorio = "archivos/".$_FILES["file_up"]["name"]; // Direccion donde se va a guardar y nombre con que se guarda.

    if($_FILES["file_up"]["type"] === "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
        move_uploaded_file($archivo, $directorio);
        echo "El archivo se cargo con exito al servidor";
    }
    else{
        header("Location: enviar_archivo.php?error=true");
    }
?>