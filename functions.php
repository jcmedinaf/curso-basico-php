<?php

function hola(){
    echo "Hola Mundo";
    echo '<hr>';
}

hola();


function suma($d1, $d2){
    if(isset($d1) && !empty($d1) && isset($d2) && !empty($d2)){
        $result = $d1 + $d2;    
        echo $result;
    }else{
        echo "Algun dato esta vacio";
    }
}

suma(5, 5);
?>