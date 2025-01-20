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

