<?php
/**
 * Lección: Manipulación Avanzada de Arreglos
 */

// 1. Declaración e inserción de elementos
$arreglo = ["Jose", "Elizabeth", "Pablo", "Luis", "Maria"];

// Agregar elementos al final
array_push($arreglo, "Grace", "Maria Joaquina", "Juan Carlos");

// Eliminar un elemento específico
unset($arreglo[3]); // Elimina a "Luis"

// Agregar al inicio del arreglo
array_unshift($arreglo, "Pedro");

echo "<h3>Arreglo Reorganizado con for</h3>";
// Reindexar de forma segura después de unset
$arreglo = array_values($arreglo);
$arrLength = count($arreglo);

for ($x = 0; $x < $arrLength; $x++) {
    echo "[$x] => " . $arreglo[$x] . "<br>";
}

echo "<h3>Ordenamiento por valor manteniendo claves (asort)</h3>";
asort($arreglo);
foreach ($arreglo as $clave => $valor) {
    echo "Clave [$clave] = $valor <br>";
}

echo "<h3>Ordenamiento natural respetando claves (sort)</h3>";
sort($arreglo);
foreach ($arreglo as $clave => $valor) {
    echo "Clave [$clave] = $valor <br>";
}
?>