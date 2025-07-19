<?php

$numero = $_POST['numero'];
    $i = 0;
    do {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    } while ($i <= 10);
?>