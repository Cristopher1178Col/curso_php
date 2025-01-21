<?php

$edad=30;

if($edad>=18){
   echo "Eres mayor de edad";   
}
else{
   echo "Eres menor de edad";
}

// crear algoritmo donde si hace una compra mayor a 100 se le hara un 20% de dcto al total de la compra

$compra=150;

if ($compra>=100){
    $compra=$compra-($compra*0.20);
}
echo "El precio de la compra es: $".$compra;



//------------EJERCICIO----------------//

/* Crear un algoritmo que envie un mensaje solo si este contiene menos de 100 letras, caso contrario que arroje un mensaje de error */

$total_letras = strlen("Hola, soy un mensaje de prueba que tiene menos de 100 letras");

if($total_letras < 100){
    echo "El mensaje fue enviado con exito";
}
else{
    echo "Error, el mensaje contiene mas de 100 letras". $total_letras;
   }

   //------------EJERCICIO----------------//

/* Crear un algoritmo indique si los habitantes hablan español u otro idioma*/

$pais ="Colombia";

if($pais=="Colombia" || $pais=="Peru" || $pais=="Ecuador" || $pais=="Venezuela" || $pais=="Bolivia" || $pais=="Paraguay"){
    echo "Los habitantes de $pais hablan español";
}
else{
    echo "Los habitantes de $pais hablan otro idioma";
}

