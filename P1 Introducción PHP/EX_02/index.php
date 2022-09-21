<?php
    $shopping_cart = 161.95;
    $tipo = 'perifericos';
    $shipping_price = 0;

    if($shopping_cart <= 20 && $tipo == 'cables') {
        echo "No se puede enviar";
    }

    if($shopping_cart<=20 && $tipo!='cables') {
        $shipping_price = 4.99;
        echo "Los gastos de envio son ".$shipping_price."€";
    }

    if($shopping_cart >= 20 && $shopping_cart <= 50) {
        $shipping_price = 4.99;
        echo "Los gastos de envio son ".$shipping_price."€";
    }

    if($shopping_cart > 50) {
        echo "Los portes son gratis"."<br />";
    }

    if($shopping_cart > 150){
        echo "GIMBERNAT_20_%";
    }
?>