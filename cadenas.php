<?php
// Ejemplo 1
$pizza = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2
echo $porciones[5]; // porción6
echo "<br>";
// Ejemplo 2
$datos = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $datos);
echo $user; // foo
echo $pass; // *

echo "<br>";
$text = "    \t\tThese are a few words :) ... ";
$binary = "\x09Example string\x0A";
$hello = "Hello World";
echo $text;
var_dump($text);
echo "<br>";
$trimmed = trim($text);
var_dump($trimmed);
echo "<br>";
$trimmed = trim($text, " \t.");
var_dump($trimmed);
echo "<br>";
$trimmed = trim($hello, "Hdle");
var_dump($trimmed);
echo "<br>";
$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);
echo "<br>";
// Elimina los caracteres de control ASCII al inicio y final de $binary
// (from 0 to 31 inclusive)
$clean = trim($binary);

//ltrim();
//rtrim();



echo str_repeat("#*", 50);


$str = "Hello Friend of world";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
echo "<br>";
print_r($arr2);

echo "<br>";

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Imprime mary had a little lamb and she loved it s

echo "<br>";

$str = strtoupper($str);
echo $str; // muestra: MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

echo "<br>";
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
$str = ucfirst($str);
echo $str;

echo "<br>";
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
$str = ucwords($str);
echo $str;


?>