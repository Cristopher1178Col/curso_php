<?php
//Realizar un programa que imprima los numeros del 1 al 10

$i = 2;

while ($i <= 10) {
    echo $i ++. " " ;
}

//Realizar un programa que haga las tablas de multiplicar

$s = 1;
$numero = 4;

while ($s <= 11) {
    echo $s++ * $numero . " ";
}

// Contar de 10 en 10 hasta 100


echo " CONTADOR  ";
$contador = 10;
while($contador <= 100){
    echo $contador . " ";
    $contador += 10;
}

//Declaracion continua

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}