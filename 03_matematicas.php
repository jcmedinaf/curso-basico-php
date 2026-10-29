<?php
/**
 * Lección: Funciones Matemáticas en PHP y Ecuación Cuadrática
 */

echo "<h3>Constantes Matemáticas</h3>";
echo "Función pi(): " . pi() . "<br>";
echo "Constante M_PI: " . M_PI . "<br>";

echo "<h3>Potencias y Raíces</h3>";
var_dump(pow(9, 2)); // int(81)
echo "<br>";
echo "Raíz cuadrada de 9: " . sqrt(9) . "<br>";
echo "Raíz cuadrada de 16: " . sqrt(16) . "<br>";

echo "<h3>Comprobación de Valores Especiales</h3>";
$finite   = 42;
$infinite = is_dir('test') ? log(0) : -INF; // -INF
$nan      = acos(2); // NAN

var_dump(is_finite($finite), is_infinite($infinite), is_nan($nan));
echo "<br>";

echo "<h3>Valores Máximos y Mínimos</h3>";
echo "Max de valores: " . max(2, 3, 1, 6, 7) . "<br>";
echo "Max de arreglo: " . max([2, 4, 5]) . "<br>";
echo "Min de valores: " . min(2, 3, 1, 6, 7) . "<br>";
echo "Min de arreglo: " . min([2, 4, 5]) . "<br>";

echo "<h3>Redondeo y Generación Aleatoria</h3>";
echo "round(3.4): " . round(3.4) . "<br>";
echo "round(3.5): " . round(3.5) . "<br>";
echo "round(1.95583, 2): " . round(1.95583, 2) . "<br>";
echo "Aleatorio en rango (5, 15): " . rand(5, 15) . "<br>";

echo "<h3>Resolución de la Ecuación Cuadrática (Fórmula General)</h3>";
// ax² + bx + c = 0
$a = 1;
$b = 5;
$c = 2;

$discriminante = pow($b, 2) - (4 * $a * $c);

if ($discriminante >= 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    echo "X1 = " . $x1 . " (Redondeado: " . round($x1, 3) . ")<br>";
    echo "X2 = " . $x2 . " (Redondeado: " . round($x2, 3) . ")<br>";
} else {
    echo "La ecuación no tiene soluciones reales en los números reales.";
}
?>