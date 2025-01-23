<?php
//Formas de declarar un arreglo

$arreglo1 = array("elemento1" ,2, "elemento2",45, 5.6);

var_dump($arreglo1[2]);

/// otra forma
$arreglo2 = ["elemento1" ,2, "elemento2",45, 5.6, false, "hola"];

var_dump($arreglo2);

//Clave => Valor

$arreglo3 = array(
   'nombre' => 'Cristopher',
   'edad' => 25,
   'ciudad' => 'Quito',
   'hobbies' => ['leer', 'correr', 'nadar']
   );

//Crear Campo
$arreglo3 ['email'] = 'cristopher@gmail.com';

//Modificar Valores

$arreglo3['edad'] = 22;

var_dump($arreglo3);

//Eliminar el ultimo elemento del arreglo

array_pop($arreglo3);

var_dump($arreglo3);

//Encontrar valores en el arreglo

var_dump(in_array(22,$arreglo3));