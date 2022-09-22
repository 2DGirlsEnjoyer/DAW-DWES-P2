<?php
function numero_primo_wilson($num1){
    $result =1;
    for ($i=$num1-1; $i>1; $i--){
        $result *= $i;
    }
    $result++;

    if (($result % $num1) == 0.0){
        return "true";
    } else {
        return "false";
    }

}

function numero_primo($num1){
    $contador = 1;
    for ($i=1; $i<=$num1; $i++){
        if ($num1%$i==0){
            $contador++;
            if($contador==2){
                return 'true';
            }
            else {
                return 'false';
            }
        }
    }
}

echo numero_primo_wilson(21.0).'</br>';
echo numero_primo(83.0);

