<?php

$arreglo = array("Jose", "Elizabeth", "Pablo", "Luis", "Maria");

array_push($arreglo, "Grace", "Maria Joaquina", "Juan Carlos");

unset($arreglo[3]);

array_unshift($arreglo, "Pedro");
$arrLength = count($arreglo);
//echo $arrLength;


for($x = 0; $x < $arrLength; $x++) {
    echo $arreglo[$x];
    echo "<br>";
}

echo "<br>";


sort($arreglo,3);
foreach ($arreglo as $clave => $valor) {
    echo "[" . $clave . "] = " . $valor . "\n";
}
echo "<br>";


asort($arreglo, 1);
foreach ($arreglo as $clave => $valor) {
    echo "[" . $clave . "] = " . $valor . "\n";
}
   
?>