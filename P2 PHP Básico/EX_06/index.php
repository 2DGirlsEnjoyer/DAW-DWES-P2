<?php

$altura = 10;
//filas
for ($fila = 1 /*i muestra el numero de fila en el que estamos*/; $fila <= $altura; $fila++) {
    //pintar asterisko por cada fila
    for ($dibujo /*pinta asteriskos segun las filas que haya*/ = 0; $dibujo < $fila; $dibujo++) {
        echo "*";
    }
    //para los espacios por fila
    for ($espacio = 0; $espacio < ($altura-$fila)*4; /* esta condicion hace que por cada numero de fila - el numero de fila en el que estes multiplicado por 4 pinte un espacio */$espacio++) {
        echo "&nbsp" ;//espacio de html
    }
    //para hacer el triangulo del lateral
    for ($l = 0; $l < $fila; $l++) {
        echo "*";
    }

    echo '<br>';

}
for ($fila = 1; $fila < $altura; $fila++) {
    for ($dibujo = $altura ; $dibujo > $fila; $dibujo--) {
        echo "*";
    }
    for ($espacio = 0; $espacio < ($fila)*4; $espacio++) {
        echo "&nbsp";
    }
    for ($l = $altura ; $l > $fila; $l--) {
        echo "*";
    }
    echo " " . '<br>';

};

