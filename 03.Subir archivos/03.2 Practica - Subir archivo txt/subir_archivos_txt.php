<?php
    $archvio_txt = $_FILES["file_txt"]["tmp_name"];
    $direccion_txt = "Archivos TXT/".$_FILES["file_txt"]["name"];

    if ($_FILES["file_txt"]["type"] === "text/plain") {
        move_uploaded_file($archvio_txt, $direccion_txt);
        echo "El archivo se subio correctamente al servidor";
    }
    else{
        header("Location: enviar_archivo_txt.php?error=true");
    }
?>