<?php

function es_mayus($palabra){
    if ($palabra == $str = strtoupper($palabra)){
        $area = 'todos son mayus';
    } else {
        $area = 'no todos son mayus';
    }
    return $area;
}
echo es_mayus('palabra');
