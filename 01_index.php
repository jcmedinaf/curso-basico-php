<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Lección 1: Sintaxis y Variables</title>
</head>
<body>
    <h1>Módulo 1: Fundamentos de PHP</h1>

    <?php
        // Comentario de una sola línea

        /*
            Comentario multilínea o de bloque
            Utilizado para explicaciones detalladas del código.
        */

        // 1. Emisión de datos con echo
        echo "Curso de PHP Básico";
        echo "<br>";
        echo "Cadena 1", "<br>", "Cadena 2 (usando coma en echo)";
        echo "<br><br>";

        // 2. Emisión de datos con print
        print("Curso de PHP Básico (usando print)");
        echo "<br><br>";

        // 3. Declaración de Variables y Tipos de Datos Escalares
        $nombre = 'Samir';       // String (comillas simples)
        $apellido = "Espina";    // String (comillas dobles)
        $edad = 21;              // Integer
        $ventas = 123.99;        // Float / Double
        $bandera = true;         // Boolean
        $pat = null;             // NULL$_var = null;            
        // Variable válida iniciando con guion bajo
        $_va2 = 0;               // Integer con guion bajo

        // 4. Concatenación empleando el operador punto (.)
        print("Nombre completo: " . $nombre . " " . $apellido);
        echo "<br>";
        echo "Edad: " . $edad . " años";
        echo "<br>";
        echo "Estado activo: " . ($bandera ? 'Sí' : 'No');
    ?>
</body>
</html>