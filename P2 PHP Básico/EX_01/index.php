<?php
$numero_fila = 1;
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Bienvenido</title>
</head>

<body>
    <h1> Bienvenido </h1>
    <table border="1">
        <?php
            do {
                echo '<tr>'.'<td>'. $numero_fila++ . " estamos en segundo de DAW". '</td>'. '</tr>';
            }while( $numero_fila <=10)
        ?>
    </table>
</body>

</html>
