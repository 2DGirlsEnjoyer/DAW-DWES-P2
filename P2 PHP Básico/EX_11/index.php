<?php

function es_mayus($palabra){
    if ($palabra == $str = strtoupper($palabra)){
        $area = 'todos son mayus';
    } elseif ($palabra == $str = strtolower($palabra)){
        $area = 'todos son minus';
    }
    else {
        $area = 'no todos son mayus';
    }
    return $area;
}
echo es_mayus('palabra');
