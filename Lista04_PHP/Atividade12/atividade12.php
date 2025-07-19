<?php

$valores = $_POST["valores"];
$total = 1;
$i = 0;

while ($i < count($valores)) {
    $total *= $valores[$i];
    $i++;
}

echo "Resultado da multiplicação acumulada: " . $total;

?>
