<?php
/**
 * Lección: Estructura de Control Switch
 */

$edad = 15;

switch ($edad) {
    case 20:
        echo "La edad registrada es exactamente 20 años.";
        break;
    case 15:
        echo "La edad registrada es exactamente 15 años.";
        break;
    case 10:
        echo "La edad registrada es exactamente 10 años.";
        break;
    case 5:
        echo "La edad registrada es exactamente 5 años.";
        break;    
    default:
        echo "No hay coincidencia para la edad de " . $edad . " años.";
        break;
}
?>