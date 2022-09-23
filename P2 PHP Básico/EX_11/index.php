<?php

function es_mayus($palabra){
    if ($palabra == $str = strtoupper($palabra)){
        $mensaje = 'Todas las letras de "'.$palabra.'" son mayusculas';
    } elseif ($palabra == $str = strtolower($palabra)){
        $mensaje = 'Todas las letras de "'.$palabra.'" son minusculas';
    }
    else {
        $mensaje = 'Todas las letras de "'.$palabra.'" no son mayusculas ni minusculas';
    }
    return $mensaje;
}
echo es_mayus('palabra');
