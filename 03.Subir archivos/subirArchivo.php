<?php
    /* Va a recorrer el arreglo $_FILES["archivo_fls"] en cada posicion ($clave) muestra el valor ($valor) que tiene.
        foreach(arrelgo[] as varible(posicion) => varible(valor de la posicion)){ }
    */
    foreach($_FILES["archivo_fls"] as $clave => $valor) {
        echo "Propiedad: $clave --- Valor: $valor <br>";
    }

    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_fls"]["name"];

    if ($_FILES["archivo_fls"]["type"] === "text/plain") {
        move_uploaded_file($archivo, $destino);
        echo "Archivo subido";
    }
    else {
        header("Location: enviarArchivo.php?error=true");
    }
?>