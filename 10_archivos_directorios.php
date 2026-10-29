<?php
/**
 * Lección: Sistema de Archivos y Funciones I/O en PHP
 */

$directorioTrabajo = __DIR__ . "/archivos_curso";

// Crear directorio si no existe
if (!is_dir($directorioTrabajo)) {
    mkdir($directorioTrabajo, 0777, true);
}

$file = $directorioTrabajo . "/miarchivo.txt";
$texto = "Hola que tal, bienvenidos al curso de PHP básico a intermedio.\n";

// Escritura segura en archivo
$fp = fopen($file, "w+");
if ($fp) {
    fwrite($fp, $texto);
    fclose($fp);
    echo "Archivo escrito exitosamente.<br>";
} else {
    echo "No se pudo abrir el archivo para escritura.<br>";
}

// Lectura de contenido
if (file_exists($file)) {
    $fp = fopen($file, "r");
    $contents = fread($fp, filesize($file));
    fclose($fp);
    
    echo "<strong>Contenido del archivo:</strong> " . htmlspecialchars($contents) . "<br>";
    
    // Obtener estadísticas del archivo
    $datos = stat($file);
    echo "Tamaño en bytes: " . $datos['size'] . " bytes.<br>";
}

echo "<h3>Exploración de Directorio</h3>";
echo "Directorio actual: " . getcwd() . "<br>";

if (is_dir($directorioTrabajo)) {
    $contenido = scandir($directorioTrabajo);
    echo "Contenido con scandir():<br>";
    echo "<pre>";
    print_r($contenido);
    echo "</pre>";
}
?>