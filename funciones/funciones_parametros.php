<?php

function saludo($nombre){
     echo "Hola, $nombre "."eres un gran programador ";
}

saludo("Cristopher");

#--------------------------------------------------------------------------------------------------------------------------#

#Funcion con argumentos por defecto

/*
Los argumentos se especifican despues del nombre de la funcion dentro del parentesis.
puedes agregar cuantos parametros quieras pero deben ir separados por comas
*/
function operacion($numero1 ,$numero2, $operacion){
    $resultado = 0;
    if ($operacion == "sumar"){
        $resultado = $numero1 + $numero2;
    }elseif($operacion == "restar"){
        $resultado = $numero1 - $numero2;
    }elseif($operacion == "multiplicacion"){
        $resultado = $numero1 * $numero2;
    }elseif($operacion =="dividir"){
        $resultado = $numero1 / $numero2;
    }else{
        echo "Operacion invalida";
    }
    return $resultado;
}

$imprimir = operacion(5 , 3,"multiplicacion");
echo $imprimir;

