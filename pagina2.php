<?php

echo "Suma de 2 números";
echo '<br>';

$result = null;
$num1 = 5;
$num2 = 4;

$result =  4;
$result1 = $num1 + $num2;
$result2 = $num1 - $num2;
$result3 = $num1 * $num2;
$result4 = $num1 / $num2;

echo "El resultado de la suma es: " . $result1;
echo '<br>';
echo "El resultado de las resta es: " . $result2;
echo '<br>';
echo "El resultado de la multiplicacion es: " . $result3;
echo '<br>';
echo "El resultado de la division es: " . $result4;
//************************************
echo '<br>';

if(($result % 2) == 0 ) {
    echo 'par';
}else{
    echo 'impar';
}

echo $num1 ** $num2;
?>