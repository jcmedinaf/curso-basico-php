<?php

$file = "f:/miarchivo.txt";
$texto = "Hola que tal, bienvenidos al curso de PHP basico a intermedio";

if (!$fp = fopen($file, "w+")){
    echo "No se ha podido abrir el archivo";
}
   

$fp = fopen($file, "w+");
fwrite($fp, $texto);
fclose($fp);


$fp = fopen($file, "r");
$contents = fread($fp, filesize($file));

echo $contents;

$datos = stat($file);

echo "<br>"; 

echo $datos[0]  . "<br>"; 
echo $datos[1]  . "<br>"; 
echo $datos[2]  . "<br>"; 
echo $datos[3]  . "<br>"; 
echo $datos[4]  . "<br>"; 
echo $datos[5]  . "<br>"; 
echo $datos[6]  . "<br>"; 
echo $datos[7]  . "<br>"; 
echo $datos[8]  . "<br>"; 
echo $datos[9]  . "<br>"; 
echo $datos[10]  . "<br>"; 
echo $datos[11]  . "<br>"; 
echo $datos[12]  . "<br>"; 


$directorio = "f:/curso-basico-php";
//mkdir($directorio, 0777, true);
echo getcwd();
echo "<br>";
chdir($directorio);
echo getcwd();

$contenido = scandir($directorio, 0);
echo "<br>";
print_r($contenido);
echo "<br>";
if ($gestor = opendir($directorio)) {
    echo "Gestor de directorio: $gestor\n","<br>";
    echo "Entradas:\n","<br>";
    // Iteramos sobre el directorio:
    while (false !== ($entrada = readdir($gestor))) {
        echo "$entrada\n","<br>";
    }
    closedir($gestor);
}

?>