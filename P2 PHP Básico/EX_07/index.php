<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content, initial-scale="1.0">
    <title>Bienvenido</title>
</head>

<body >
    <h1> Bienvenido </h1>

    <?php
    $altura = 9;
    echo "<table border='1'>";
    for($linea = 1; $linea <= $altura; $linea++) {
        echo "<tr>";
        for ($columna = 1; $columna <= $altura; $columna++) {
            if ((($columna+$linea) % 2 !=0)) {
                //if (($linea % 2 == 0 && $columna % 2 !=0) || ($linea % 2 != 0 && $columna % 2 == 0)) {
                echo '<td style="padding: 10px; text-align:left;background-color:black;"> </td>';
            } else {
                echo '<td style="padding: 10px; text-align:left;background-color:white;"> </td>';
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>

