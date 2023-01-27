<?php

function calculateFactorial ($number)
{
    if ($number === 0 || $number === 1) {
        throw new Exception("Number should be greater than one and different of zero", 1);
    } else {
        return $number * calculateFactorial($number - 1);
    }
}


echo '<form action="/fatorial.php" method="GET">';
    echo '<label>Calcular o fatorial</label><br>';
    echo '<input type="number" placeholder="Número"></input><br>';
    echo '<input type="submit" name"teste"></input>';
echo '</form>';


?>