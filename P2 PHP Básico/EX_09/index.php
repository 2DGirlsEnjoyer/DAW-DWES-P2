<?php

function comparar($palabra){
    $hash=md5($palabra);
    echo($hash.'</br>');
}
comparar('puerco');