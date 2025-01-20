<?php
//Podemos modificar cadenas de texto de diferentes maneras

//1.- strtoupper: Convierte una cadena de texto a mayusculas

$nombre = "Juan";
echo strtoupper($nombre);

echo "<br/>";

//2.- str_replace( , ): Reemplaza una cadena de texto por otra

$mensaje = "Me gusta la pizza";
echo str_replace("pizza", "hamburguesa", $mensaje);

//3. - strtolower: Convierte una cadena de texto a minusculas

$nombre = "Juan";
echo strtolower($nombre);

echo "<br/>";

//4.- strrev : Invierte el orden de las letras de una cadena de texto

$nombre = "Juan";
echo strrev($nombre);

echo "<br/>";

//5.- trim : Elimina los espacios en blanco de una cadena de texto

$nombre = " Hola Hermoso Mundo";
echo trim($nombre);

echo "<br/>";

//5.- explode : Divide una cadena de texto en un array de palabras

$frase = "Hola soy Juan";
$palabras = explode(" ", $frase);
print_r($palabras);
