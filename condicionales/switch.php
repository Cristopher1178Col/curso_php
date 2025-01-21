<?php

/* Realice un programa el cual imprima cual es tu color favorito 
 mostrar un ejemplo con if- else y con switch*/

 $color_favorito = "no definido";

 if ($color_favorito == "azul"){
     echo "Tu color favorito es ". $color_favorito;
 }
 elseif($color_favorito == "rojo"){
     echo "Tu color favorito es ". $color_favorito;
 }
 elseif($color_favorito == "verde"){
     echo "Tu color favorito es ". $color_favorito;
 }
 else{
     echo "No se ha encontrado el color ";
 }

 //Con switch


 $color_favorito2 = "negro";
 switch($color_favorito2){
    case "rojo":
      echo "Tu color favorito es el rojo";
      break;
    case "azul":
        echo "Tu color favorito es el azul";
        break;
    case "verde":
        echo "Tu color favorito es el verde";
    default:
        echo "No se ha encontrado el color";
 }


 // Tambien se pueden un caso para cada bloque de codigo
 
 
 $numero =3;

 switch ($d){
    case 0:
    case 2:
    case 4:
    case 6:
    case 8:
    case 10:
        echo "El numero es par";
        break;
    case 1:
    case 3:
    case 5:
    case 7:
        echo "El numero es impar";
        break;
 }