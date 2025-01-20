<?php
//Calcular el total que una persona debe pagar en una llantera, el precio de cada llanta es de $800 si se compran menos de 5 llantas y de 700 si se compran 5 o mas llantas

$llantas_compradas=9;

if($llantas_compradas<5){

    $total=$llantas_compradas*800;
    echo"el precio de cada una de sus llantas sera de $". $total;
}
else{
    $total=$llantas_compradas*700;
    echo"el precio de cada una de sus llantas sera de $". $total;
}
//determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobara si su promedio de tres calificaciones es mayor o igual a 7.0; reprueba en caso contrario.

$nota_1=7;
$nota_2=8;
$nota_3=0;

$promedio=($nota_1+$nota_2+$nota_3)/3;

if($promedio>=7.0){
    echo "aprobado con calificacion ". $promedio;
}
else{
    echo "reprobado con calificacion ". $promedio;
}    