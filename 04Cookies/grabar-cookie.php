<?php
    /* setcookie("nombre_de_la_cookie", variable_enlace, tiempo, "directorio_en_el_que_convive", "El_dominio_en_que_queremos_que_exista"); */
    setcookie("idioma_solicitado", $_GET["idioma"], time()+86400, "/");
    // Para que la cookie funcione se tiene que especificar la rutadel directorio en el cuarto parametro con "/", se entiende que la cookie existira en todo el directorio del sitio.
    header("Location: usar-cookie.php");
?>