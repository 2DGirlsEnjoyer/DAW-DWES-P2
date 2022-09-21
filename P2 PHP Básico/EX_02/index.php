<?php

$array = [
    ['nombre'=> 'Pepe', 'apellido'=>' Almeida'],
    ['nombre'=> 'Marcos', 'apellido'=>' Pérez']
];

foreach ($array as ['nombre'=>$nombre, 'apellido' =>$apellido]){
    echo '<li>'. $nombre . $apellido .'</li>';
}

echo ''.'</BR>';
echo 'Hi ha un total de ' . count($array). ' alumnes'.'</BR>';
echo '</BR>';
echo'<hr>';

$noms = ['nom1'=>'Marcos Santana',
    'nom2'=> 'Laura Alvarez',
    'nom3'=> 'Paco Domingo',
    'nom4'=> 'Josep Lliure',
    'nom5'=> 'Sergio Amigo',
    'nom6'=> 'Matias Arrieta',
    'nom7'=> 'Pol Castanyer'];

foreach ($noms as $nom){
    echo '<li>'. $nom .'</li>';
}
echo ''.'</BR>';
echo 'Hi ha un total de ' . extract($noms). ' alumnes';