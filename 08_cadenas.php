<?php
/**
 * Lección: Manipulación de Cadenas de Texto
 */

echo "<h3>1. Fragmentación de cadenas (explode)</h3>";
$pizza = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);
echo "Primera porción: " . $porciones[0] . "<br>";
echo "Última porción: " . $porciones[count($porciones) - 1] . "<br>";

echo "<h3>2. Asignación múltiple con explode y list()</h3>";
$datos = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $datos);
echo "Usuario asignado: " . $user . "<br>";
echo "Shell asignada: " . $shell . "<br>";

echo "<h3>3. Limpieza de espacios en blanco (trim)</h3>";
$text = "    \t\tTexto con espacios alrededor :) ... ";
echo "Texto limpio: '" . trim($text) . "'<br>";

echo "<h3>4. Transformación de caja (Mayúsculas / Minúsculas)</h3>";
$str = "Mary Had A Little Lamb and She LOVED It So";

echo "Original: " . $str . "<br>";
echo "Minúsculas (strtolower): " . strtolower($str) . "<br>";
echo "Mayúsculas (strtoupper): " . strtoupper($str) . "<br>";
echo "Capitalizar primera letra (ucfirst): " . ucfirst(strtolower($str)) . "<br>";
echo "Capitalizar palabras (ucwords): " . ucwords(strtolower($str)) . "<br>";

echo "<h3>5. División de cadena en arreglos (str_split)</h3>";
$strSplit = "Hello Friend";
print_r(str_split($strSplit, 3));
?>