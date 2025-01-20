<?php

// and (Y) o && es lo mismo

$valor_1=7;
$valor_2=3;

var_dump ($valor_1==4 and /*tambien se puede utilizar &&*/ $valor_2==3);

// or (O) || es lo mismo

$valor_1=7;
$valor_2=3;
var_dump ($valor_1==7 || /*tambien se puede utilizar or*/ $valor_2==5);

//! (NO) NOT es lo mismo

$valor_1=4;
$valor_2=3;

var_dump (!($valor_1 == $valor_2));