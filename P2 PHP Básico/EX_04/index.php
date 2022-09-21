<?php

$array = ['nombre', 'apellido',' Alm','nombre', 'pepe2', 'apellido',' Alm2'];
$numero_palabras = count($array);
$minima_longitud = strlen($array[0]);
$maxima_longitud = strlen($array[0]);

for ($i =0; $i<$numero_palabras; $i++){
    if(strlen($array[$i])>=$maxima_longitud){
        $indice_maxima_longitud=$i;
        $maxima_longitud=strlen($array[$i]);
    }elseif (strlen($array[$i])<=$minima_longitud){
        $indice_minima_longitud=$i;
        $minima_longitud=strlen($array[$i]);
    }
}

echo 'La palabra con una longitud mayor es '.$array [$indice_maxima_longitud] . '</br>';
echo 'La palabra con una longitud menor es '. $array [$indice_minima_longitud];
?>
