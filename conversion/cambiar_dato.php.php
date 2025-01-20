<?php
/* A veces es necesario cambiar una variable de un tipo de datos a otro y, a veces, es necesario que una variable tenga un tipo de datos específico.
 Esto se puede hacer mediante conversión.*/

/*La conversión en PHP se realiza con estas declaraciones:

(string)- Convierte al tipo de datos String
(int)- Convierte al tipo de datos entero
(float)- Convierte al tipo de datos Float
(bool)- Convierte al tipo de datos booleano
(array)- Convierte al tipo de datos Array
(object)- Convierte al tipo de datos Objeto
(unset)- Convierte al tipo de datos NULL
*/

$a = 10;
$b = 2.1;
$c = "Hola";
$d = true;
$e = Null;

//Aca se convierten las variables a string y se pueden poner cualquieras de las anteriores declaraciones de la linea 7 a la 13

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;