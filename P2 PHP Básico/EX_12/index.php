<?php
function numero_primo_wilson($num1){
    $result =1;
    for ($i=$num1-1; $i>1; $i--){
        $result *= $i;
    }
    $result++;

    if (($result % $num1) == 0.0){
        return 'El numero '.$num1. " es primo";    } else {
        return 'El numero '.$num1. " no es primo";    }

}

function numero_primo($num1){
    $contador = 0;
    for ($i=1; $i<=$num1; $i++){
        if ($num1%$i==0){
            $contador++;
        }
    }
    if ($contador==2){
        return 'El numero '.$num1. " es primo";
    } else {
        return 'El numero '.$num1. " no es primo";    }
}

echo numero_primo_wilson(21.0).'</br>';
echo numero_primo(11.0);

