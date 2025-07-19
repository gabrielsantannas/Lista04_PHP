<?php

$salariosAtuais  = array(
    "Gabriel" => 2300.00,
    "Gustavo" => 1900.00,
    "Pedro" => 1900.00,
    "Arthur" => 6000.00,
    "Gabriel D." => 2200.00,
);

echo "Salários atuais:<br><br>";
foreach ($salariosAtuais as $nome => $salario) {
    echo "O salário atual de {$nome} é R$ " . number_format($salario, 2, ',', '.') . "<br>";
}


echo "<br> Será aplicado um aumento de 10% nos salários.<br><br>";
$aumento = 0.10; // o aumento de 10% que será aplicado

echo "Novos salários:<br><br>";
foreach ($salariosAtuais as $nome => $salario) {
    $novoSalario = $salario + ($salario * $aumento);
    echo "O novo salário de {$nome} é R$ " . number_format($novoSalario, 2, ',', '.') . "<br>";
}

?>