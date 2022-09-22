<?php
function comparar($vector, $valor, $orden){
    if ($valor == 'clave' && $orden == 'asc') {
        ksort($vector);
        foreach ($vector as $numero => $posicion) {
            echo $posicion . '</br>';
        }
    } else if ($valor == 'clave' && $orden == 'desc') {
        krsort($vector);
        foreach ($vector as $numero => $posicion) {
            echo $posicion . '</br>';
        }
    }
    if ($valor == 'valor' && $orden == 'asc') {
        ksort($vector);
        foreach ($vector as $numero => $posicion) {
            echo $numero . '</br>';
        }

    } else if ($valor == 'valor' && $orden == 'desc') {
        krsort($vector);
        foreach ($vector as $numero => $posicion) {
            echo $numero . '</br>';
        }
    }
}

comparar([1 => 'primero', 2 => 'segundo', 3 => 'tercero', 4 => 'cuarto', 5 => 'quinto'], 'valor', 'desc');
