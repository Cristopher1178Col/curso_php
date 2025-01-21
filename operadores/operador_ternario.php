<?php
// se considera una instruccion if de una sola linea se compone de el operadoer y dos resultados sintaxis es <operador>?<true value>:<false value>

(5>7) ? $total=10*7/*valor true*/ : $total=10*5;/*valor false*/

echo $total ;

//Para que un alumno pase una materia debe sacar mas de 3 en la nota definitiva en caso contrario npierde//

$nota=4;
($nota>3) ? $mensaje="aprobado " : $mensaje="reprobado ";/*valor true*/

echo $mensaje;

//Tambien se puede hacer como 

$nota=2;

echo ($nota>3 ? 'aprobado' : 'reprobado');