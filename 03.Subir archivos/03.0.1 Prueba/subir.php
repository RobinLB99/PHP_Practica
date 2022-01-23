<?php
    /* Va a recorrer el arreglo $_FILES["archivo_fls"] en cada posicion ($clave) muestra el valor ($valor) que tiene.
        foreach(arrelgo[] as varible(posicion) => varible(valor de la posicion)){ }
    */
    foreach($_FILES["subir-servidor"] as $clave => $valor) {
        echo "Propiedad: $clave --- Valor: $valor <br>";
    }
?>