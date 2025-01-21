<?php
//El foreach bucle: recorre un bloque de código para cada elemento de una matriz o cada propiedad de un objeto.

$colores = array("negro","azul","verde","rojo");

foreach ($colores as $color) {
    echo $color. " ";
}


/*Claves y valores 

La matriz anterior es una matriz indexada , donde el primer elemento tiene la clave 0, el segundo tiene la clave 1, y así sucesivamente.

Las matrices asociativas son diferentes, las matrices asociativas utilizan claves con nombre que usted les asigna y, al recorrer matrices asociativas, es posible que desee conservar la clave además del valor.

Esto se puede hacer especificando tanto la clave como el valor en la foreach definición, de la siguiente manera: */

$miembros = array("Pedro"=>35, "Juan"=>28, "Maria"=>32);
    foreach ($miembros as $clave => $valor) {
        echo $clave. " tiene ". $valor. " años ";
    }