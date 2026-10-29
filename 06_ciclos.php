<?php
/**
 * Lección: Bucles (for, while, do-while, foreach) y Constantes
 */

echo "<h3>1. Bucle For Iterativo</h3>";
for ($x = 0; $x <= 5; $x++) {
    echo "Número: $x <br>";
}

echo "<h3>2. Bucle While</h3>";
$i = 1;
while ($i <= 3) {
    echo "Iteración While: $i <br>";
    $i++;
}

echo "<h3>3. Bucle Do-While</h3>";
$j = 0;
do {
    echo "Iteración Do-While: $j <br>";
    $j++;
} while ($j < 3);

echo "<h3>4. Recorrido de Arreglo Indexado con Foreach</h3>";
$colors = ["Rojo", "Verde", "Azul", "Amarillo"];
foreach ($colors as $color) {
    echo "Color: $color <br>";
}

echo "<h3>5. Recorrido de Arreglo Asociativo con Foreach</h3>";
$personas = [
    "Peter" => 35,
    "Ben"   => 37,
    "Joe"   => 43
];

foreach ($personas as $nombre => $edad) {
    echo "$nombre tiene $edad años.<br>";
}

echo "<h3>6. Definición de Constantes de Configuración</h3>";
define("_AppPathImg_", "c:/sistemas/img/");
define("_AppPathReport_", "c:/sistemas/reportes/");

echo "Ruta de Reporte: " . _AppPathReport_ . "rptusuarios.pdf<br>";
echo "Ruta de Imagen: " . _AppPathImg_ . "logo.jpg<br>";
?>