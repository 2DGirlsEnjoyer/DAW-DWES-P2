
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Bienvenido</title>
</head>
<div style="border: 1px solid">
<?php
$array = ['AFG'=> ['nom'=>'Afganistán','codigo'=>' 004'],
'ALA'=> ['nom'=>'Åland, Islas ','codigo'=>' 248'],
    'ALB'=> ['nom'=>'Albania','codigo'=>' 008'],
    'DEU'=> ['nom'=>'Alemania','codigo'=>' 276'],
    'AND'=> ['nom'=>'Andorra','codigo'=>' 020'],
    'AGO'=> ['nom'=>'Angola','codigo'=>' 024'],
    'AIA'=> ['nom'=>'Anguila','codigo'=>' 660'],
    'ATA'=> ['nom'=>'Antártida','codigo'=>' 010'],
    'ATG'=> ['nom'=>'Antigua y Barbuda','codigo'=>' 028'],
    'SAU'=> ['nom'=>'Arabia Saudita','codigo'=>' 682'],];


foreach ($array as $pais => ['nom'=>$nombre, 'codigo' =>$apellido]){
    echo '<li>'. 'El país '. $nombre.' utiliza el código alfa-3 '.$pais . ' con código númerico '. $apellido.'.'.'</li>';
}?>
</div>


