<?php
/**
 * Lección: Operadores Aritméticos y Estructura Par/Impar
 */

echo "<h2>Operaciones Matemáticas Básicas</h2>";

$num1 = 5;
$num2 = 4;

$suma           = $num1 + $num2;
$resta          = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division       = $num1 / $num2;
$exponenciacion = $num1 ** $num2;

echo "Número 1: " . $num1 . "<br>";
echo "Número 2: " . $num2 . "<br>";
echo "<hr>";

echo "El resultado de la suma es: " . $suma . "<br>";
echo "El resultado de la resta es: " . $resta . "<br>";
echo "El resultado de la multiplicación es: " . $multiplicacion . "<br>";
echo "El resultado de la división es: " . $division . "<br>";
echo "El resultado de la exponenciación ($num1 ^ $num2) es: " . $exponenciacion . "<br>";

echo "<hr>";

// Evaluación de número par o impar con el operador módulo (%)
$numeroEvaluar = 4;

if (($numeroEvaluar % 2) === 0) {
    echo "El número " . $numeroEvaluar . " es <strong>PAR</strong>.";
} else {
    echo "El número " . $numeroEvaluar . " es <strong>IMPAR</strong>.";
}
?>