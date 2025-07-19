<?php

$lista_prod  = array(
    "Arroz" => 10.50,
    "Feijão" => 20.75,
    "Macarrão" => 15.30,
    "Leite" => 5.99,
    "Energético" => 12.45
);

foreach ($lista_prod as $produto => $preco) {
    echo "O preço do $produto é R$ " . number_format($preco, 2, ',', '.') . "<br>";
}

?>