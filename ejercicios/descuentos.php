<?php
$nombre_cliente = "Cristopher";
$valor_compra = 245;

if ($valor_compra < 50) {
    $descuento = 0.5;
} elseif ($valor_compra >= 50 && $valor_compra < 100) {
    $descuento = 0.10;
} elseif ($valor_compra >= 100 && $valor_compra < 250) {
    $descuento = 0.15;
} elseif ($valor_compra >= 250 && $valor_compra < 500) {
    $descuento = 0.20;
} else {
    $descuento = 0;
}

$preciofinal = $valor_compra - ($valor_compra * $descuento);

echo "Hola $nombre_cliente. El valor de tu compra sin descuento es $valor_compra y el valor de tu compra con descuento es $preciofinal.";
