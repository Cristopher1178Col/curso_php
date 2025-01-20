<?php
//En PHP podemos definir arrays utilixando el constructor de lenguaje array() o utilizando la notacon de corchetes []tambien llamada sintaxis corta



//array de tipo escalar
$frutas = array("manzana", "pera", "naranja");
$frutas = ["manzana", "pera", "naranja"];
 echo $frutas[2]; 
 echo "<br/>";
 echo "<br/>";

 //cambiar valores de arrays
 $frutas[2] = "fresa";
 echo $frutas[2];
 echo "<br/>";
 echo "<br/>";

 //array de tipo asociativo 
 $personas = array("nombre" => "Juan", 
                   "edad" => 25);

 $personas ["edad"]=19;//cambiando el valor de edad

 echo $personas["edad"];
 echo "<br/>";
 echo "<br/>";

 //array de multiples dimensiones
 $personas_2 = [
    "nombre"=> "Juan",
    "apellido"=> "Perez",
    "edad" => 25,
    "direccion" => "AV siempre viva",
    "cursos" => ["PHP", "JavaScript", "Python"]
 ];

 echo $personas_2["nombre"];

 