<?php

$edad = 21;


if($edad > 21){
   echo "Eres mayor de 21";
}elseif($edad == 21){
   echo "Tienes 21 años";
}else{
   echo "Eres menor de 21";
}
/*
En una escuela de conduccion se tiene un programa que dependiendo de la edad
del usuario se debe mostrar el tipo de licencia a la que tiene derecho

condicion 1 : si es menor a 16 años no tiene direcho a licencia
condicion 2: si es mayor a 16 pero menor a 18 tiene una licencia de aprendizaje
condicion 3: si es mayor a 18 pero menor a 70 tiene una licencia estandar
condicion 4: si es mayor a 70 tiene una licencia especial
*/


$edad = 100;


if($edad < 16){
    echo "No tiene derecho a licencia";
}elseif($edad >= 16 && $edad < 18){
    echo "Tiene derecho a licencia de aprendizaje";
}elseif($edad >=18 && $edad < 70){
    echo "Tiene derecho a licencia estandar";
}else{                                                  #El else ya no tiene condicion porque ya todas se han cumplido
    echo "Tiene derecho a licencia especial";
}
