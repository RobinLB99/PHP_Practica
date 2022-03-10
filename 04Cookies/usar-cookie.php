<?php
    if( !$_COOKIE["idioma_solicitado"] ){
        header("Location: pedir-idioma.php");
    }
    else if( $_COOKIE["idioma_solicitado"] == "es"){
        header("Location: español.php");
    }
    else if( $_COOKIE["idioma_solicitado"] == "en") {
        header("Location: ingles.php");
    }
?>