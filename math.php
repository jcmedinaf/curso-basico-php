<?php

echo pi(); // 3.1415926535898
echo "<br>";
echo M_PI; // 3.1415926535898

echo "<br>";

static $epsion = 2.11;
echo $epsion;

echo "<br>";
var_dump(pow(9, 2)); // int(256)
echo "<br>";

echo sqrt(9); // 3
echo "<br>";
echo sqrt(16); // 3.16227766 ...

echo "<br>";
$nan = cos(9);
echo $nan;
echo "<br>";
$nan = sin(9);
echo "<br>";
$nan = acos(9);
echo "<br>";
$nan = asin(9);
echo "<br>";

$finite = 42;
$infinite = log(0);
$nan = acos(2);

echo "<br>";

var_dump(is_finite($finite), is_infinite($finite), is_nan($finite));  // true, false, false

echo "<br>";

echo max(2, 3, 1, 6, 7);  // 7
echo "<br>";
echo max(array(2, 4, 5)); // 5
echo "<br>";
echo min(2, 3, 1, 6, 7);  // 1
echo "<br>";
echo min(array(2, 4, 5)); // 2

echo "<br>";

echo round(3.4);         // 3
echo "<br>";
echo round(3.5);         // 4
echo "<br>";
echo round(3.6);         // 4
echo "<br>";
echo round(3.6, 0);      // 4
echo "<br>";
echo round(1.95583, 2);  // 1.96
echo "<br>";
echo round(1241757, -3); // 1242000
echo "<br>";
echo round(5.045, 2);    // 5.05
echo "<br>";
echo round(5.055, 2);    // 5.06
echo "<br>";

echo rand() . "\n";
echo "<br>";
echo rand() . "\n";
echo "<br>";
echo rand(5, 15);


echo exp(12); //1.6275E+005
echo exp(5.7); //298.87


echo "<br>";

$a = 1;
$b = 5;
$c = 2;

echo $x1 = (-$b + sqrt(( pow($b,2) - (4 * $a * $c) ) )) / (2 * $a);

echo "<br>";

echo $x2 = (-$b - sqrt(( pow($b,2) - (4 * $a * $c) ) )) / (2 * $a);
echo "<br>";
echo round($x1, 3);
echo "<br>";
echo round($x2, 3);
?>