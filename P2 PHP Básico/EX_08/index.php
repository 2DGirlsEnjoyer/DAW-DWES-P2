<?php

function area_triangulo($num1, $num2, $num3){
    $per = $num1+$num2+$num3;
    $sp = $per/2;
    $area=(sqrt($sp*($sp-$num1)*($sp-$num2)*($sp-$num3)));
    return $area;
}

echo area_triangulo(10,10,10);
?>