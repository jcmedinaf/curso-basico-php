<?php
/**
 * Lección: Control de Flujo con Condicionales Anidadas
 */

$edad = 25;

echo "Edad a evaluar: " . $edad . "<br>";

if ($edad >= 18 && $edad <= 100) {
    echo "Tu edad es " . $edad . " años. Eres <strong>mayor de edad</strong>.";
} elseif ($edad >= 11 && $edad <= 17) {
    echo "Tu edad es " . $edad . " años. Eres un <strong>adolescente</strong>.";
} elseif ($edad >= 0 && $edad <= 10) {
    echo "Tu edad es " . $edad . " años. Eres un <strong>niño</strong>.";
} else {
    echo "El valor de edad ingresado ($edad) está fuera del rango válido.";
}
?>