<?php
//== igual true

var_dump( 1=="1");

//=== identico false (tiene que ser el mismo tipo de dato string,int, boleano etc)
var_dump( 1==="1");

//!= diferente false no distingue tipo de dato

var_dump( 4!="7");

//<> diferente true distingue tipo de dato

var_dump( 9 <> "7" );

//!== no identico true distingue tipo de dato

var_dump( 9 !== 9 );

//< menor que 

var_dump( 5 < 7 );

//> mayor que true

var_dump( 7 > 5 );

//<= o >= menor o igual o mayor que true

var_dump( 7 <= 7 );

var_dump( 7 >= 10 );