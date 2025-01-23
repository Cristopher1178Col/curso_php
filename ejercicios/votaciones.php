<?php

function chequeo($nombre, $edad){
    if ($edad >= 18) {
        return "El usuario $nombre puede votar";
}else{
    return "El usuario $nombre no puede votar";
}
}

$check=chequeo("Cristopher", 30);

echo $check;