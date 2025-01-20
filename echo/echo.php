<?php
// el echo se puede declarar  con o sin parentesis

//-------Ejemplo------//

echo "Hola mundo";
echo "<hr/>";
echo ("Hola mundo");
//las dos formas son correctas

// el texto en echo puede tener tambien texto HTML

//-------Ejemplo------//

echo "<b>Hola mundo</b>";
echo "<br/>";
echo "<hr/>";

// el texto en echo puede tener tambien variables

//-------Ejemplo------//

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

//Uso de comillas dobles y simples
//-------Ejemplo------//

/* Las cadenas están rodeadas por comillas, pero hay una diferencia entre comillas simples y dobles en PHP.

Al utilizar comillas dobles, se pueden insertar variables en la cadena como en el ejemplo anterior.

Al utilizar comillas simples, las variables deben insertarse utilizando el .operador, de la siguiente manera: */

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

  echo "<br/>";
  echo "Esto es un texto con comillas dobles: $txt1";
  echo "<br/>";
  echo 'Esto es un texto con comillas simples: ' . $txt1;



  //-------PARA EL "PRINT" SON LAS MISMAS CONDICIONES QUE PARA EL ECHO------//


