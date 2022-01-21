<?php

// Esto es un comentario
/* Esto es un comentario de
linea multiple */

// echo("hola mundo"); // Tambien es correcto
echo "hola mundo";/*
hola mundo */

// Se nos permite interpretar etiquetas de HTML
    echo "<br>hola mundo, <br>Estoy aprendiendo a programar en <h1>PHP</h1>";/*
    hola mundo,
    estoy aprendiendo a programar en
    PHP */

// Variables
    $nombre = "Robin";
    $Nombre = "Joel";

//Concatenacion de cadenas y variable`s
    echo "<br>".$nombre." ".$Nombre;/*
    Robin Joel */

echo "<br>";/*

*/

// Operaciones
    $num1 = 5;
    $num2 = 34;

    $suma = $num1 + $num2;

    echo "La suma de num1 y num2 es: ".$suma;/*
    La suma de num1 y num2 es 6 */

// Para escapar a simbolo declaratorio de varible en una cadena de texto
    echo "<br>El valor de \$suma tiene un valor de $suma";/*
    El valor de suma tiene un valor de 6 */

/* Condiciones */
    $modulo = $suma % 2;

    if($modulo === 0){
        echo "<br>El numero es Par";
    }
    else{
        echo "<br>El numero es Impar";
    }

/* Ciclo for */
    for($i = 0; $i <= 10; $i++){
        echo "<br>".$i;
    }

?>