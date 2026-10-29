<?php
/*
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 5; $x++) {
    for($y = 0; $y <= 5; $y++){
        for ($z = 0; $z <= 5; $z++) { 
            echo "El valor de X: ". $x. ", Y: " .$y. ", Z: " .$z,"<br>";
        }
    }
}

$x = 0;

do {
    echo "The number is: $x <br>";
    //$x++;
    //$x=$x+1;
    $x+=1;
} while ($x < 5);


$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo $value, "<br>";
}

//print_r($colors);

//var_dump($colors);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

//print_r($age);

//var_dump($age);

define("_AppPathImg_", "c:/sistemas/img/", true);
define("_AppPathReport_", "c:/sistemas/reportes/", true);
echo _AppPathReport_ . "rptusuarios.pdf";
echo "<br>";
echo _AppPathImg_ . "logo.jpg";


?>