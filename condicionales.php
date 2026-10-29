<?php
/*
if ($edad >= 18) {
    echo "Tu Edad es: " .$edad;
}

if($edad >= 18){
    echo "Tu Edad es: " .$edad . " , eres mayor de edad";
} else {
    echo "Tu Edad es: " .$edad . " , eres menor de edad";
}
*/

$edad = 120;
if ($edad >= 18 && $edad <= 100 ) {
    echo "Tu Edad es: " .$edad . "o mas de ". $edad;
} elseif ($edad == 17) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 16) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 15) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 14) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 13) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 12) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad == 11) {
    echo "Tu Edad es: " .$edad;
} elseif ($edad >= 0 && $edad <= 10) {
    echo "Tu Edad es: " .$edad . ", eres un Niño";
}else{
    echo "estas fuera del rango de edades";
}



?>