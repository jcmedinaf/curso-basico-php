<?php
/**
 * Lección: Declaración y Uso de Funciones en PHP
 * Incluye funciones básicas sin parámetros y funciones con validación de argumentos.
 */

echo "<h2>Módulo: Funciones y Modularidad en PHP</h2>";

/**
 * Función simple sin parámetros
 * Muestra un mensaje en pantalla acompañado de una línea divisoria.
 */
function saludar(): void {
    echo "Hola Mundo";
    echo "<hr>";
}

// Invocación de la función saludar
saludar();


/**
 * Función con parámetros y validación de seguridad
 * Valida que los datos existan y no estén vacíos antes de operar.
 * 
 * @param mixed $d1 Primer valor a sumar
 * @param mixed $d2 Segundo valor a sumar
 */
function sumarNumeros($d1, $d2): void {
    // Verificamos que ambos parámetros estén definidos y no estén vacíos
    if (isset($d1, $d2) && $d1 !== '' && $d2 !== '') {
        $result = $d1 + $d2;    
        echo "El resultado de la suma es: <strong>" . $result . "</strong>";
    } else {
        echo "Aviso: Algún dato está vacío o no ha sido definido correctamente.";
    }
    echo "<hr>";
}

// Invocación de la función sumarNumeros con argumentos válidos
sumarNumeros(5, 5);

// Ejemplo adicional probando la validación con un valor vacío
// sumarNumeros(10, '');
?>