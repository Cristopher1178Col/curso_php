<?php

//Los caracteres de escape en PHP son los siguientes:
// \n (salto de línea)
// \r (retorno de carro)
// \t (tabulador)
// \v (tabulador vertical)
// \b (retroceso)
// \f (salto de página)
// \\ (barra invertida)
// \0 (carácter nulo)
// \xXX (carácter hexadecimal)
// \uXXXX (carácter Unicode)
// \' (comillas simples)
// \" (comillas dobles)
// \f form feed (salto de página)
// \n new line (nueva línea)


$x = "We are so called \"Vikings\" from the north."; // si hubieramos puesto comillas simples no se hubiera interpretado la comilla doble o si pusieramos vikings en comillas dobles no se hubiera interpretado la comilla doble

echo $x;

