<?php

/*
PHP tiene nueve constantes predefinidas que cambian de valor dependiendo de dónde se utilizan, también llamadas "constantes mágicas".

Estas constantes mágicas se escriben con un guión bajo doble al principio y al final, excepto la constante ClassName::class.
 */

/*
__DIR__: El directorio del archivo.
__FILE__: El nombre del archivo, incluyendo la ruta completa.
__FUNCTION__: Si
 está dentro de una función, se devuelve el nombre de la función.
__LINE__: El número de la línea actual.
__METHOD__: Si se usa dentro de una función que pertenece a una clase, se devuelve tanto el nombre de la clase como el de la función.
__NAMESPACE__: Si se usa dentro de un espacio de nombres, se devuelve el nombre del espacio de nombres.
__TRAIT__: Si se usa dentro de un trait, se devuelve el nombre del trait.
ClassName::class: Devuelve el nombre de la clase especificada y el nombre del espacio de nombres, si lo hay.
*/


/*
Las constantes magicas no distinguen etre mayusculas y minusculas

Por lo que __FILE__ y __file__ son lo mismo
*/