<?php
//la segmentacion de cadenas de texto nos permite dividir una cadena de texto en subcadenas y se utiliza substr

$x = "Hola mundo";

echo substr($x, 0, 4);

//rebanar desde el final de la cadena

$y = "Hola mundo";

echo substr($y, -5, 3);

//Longitud negativa .... A partir de la cadena "Hola ,como estas?" obten los caracteres comenzando desde el indice 5, continua hasta llegar al caracter 3 desde el final (indice -3)

$z = "Hola ,como estas?";
echo substr($z, 5, -3);
