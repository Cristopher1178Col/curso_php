<?php
/*
PHP tiene mas de 1000 funciones integradas y ademas se pueden crear personalizadas

Una función se refiere a un bloque de código reutilizable que realiza una tarea específica y se puede llamar en cualquier parte del programa.

Las funciones definidas por el usuario

- Una funcion es un bloque de declaraciones que se puede llamar varias veces en un programa.
- Una funcion puede recibir argumentos y devolver valores.
- Una funcion puede ser definida dentro de otra funcion.
- una funcion no se cargara automaticamente cuando se cargue una pagina
- Una funcion se ejecutara mediante una llamada a la funcion


su sintaxis es 

function nombreFuncion ($argumentos){
     echo "Hola";
}
     nombreFuncion

*/


function saludo(){
     echo "Hola mundo";
}
saludo();


$numero = 10;

saludo();
saludo();
saludo();
saludo();                    #SE PUEDEN LLAMAR CUANTAS VECES SE QUIERAN


#------------------------------#


function suma1(){
     $numero1 = 30;
     $numero2 = 20;

     echo $numero1 + $numero2;
}
suma1();