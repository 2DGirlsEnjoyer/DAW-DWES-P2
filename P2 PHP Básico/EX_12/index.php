<?php
function numero_primo($num1){
    $result =1;
    for ($i=$num1-1; $i==1; $i--){
        $result *= $i;
    }
    $result2 = $result+1;
    $result3 = $result2/$num1;
    if ($result3 % $num1 == 0){
        return true;
    } else {
        return false;
    }
}
echo numero_primo(3);