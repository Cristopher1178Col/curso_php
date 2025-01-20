<?php
//Las cadena de texto en PHP se pueden definir de tres formas
//1.- Con comillas dobles
$nombre = "Juan";
//2.- Con comillas simples
$nombre = 'Juan';
//3.- Con la funcion strval
$nombre = strval("Juan");

//---------------------------Longitud de cadena---------------------------------//
//la strlen devuelve la longitud de la caadena de texto

echo strlen($nombre);

//---------------------------Recuento de palabras---------------------------------//

//la str_word_count devuelve el numero de palabras en una cadena de texto

echo str_word_count("Hola mundo");

//---------------------------Buscar texto dentro de una cadena---------------------------------//

//la strpos devuelve la posicion de la primera aparicion de un texto en una cadena

//echo strpos("Hola mundo", "mundo");
