<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['dia'])) {
    $vendas = $_POST['dia'];

    $total = array_sum($vendas);
    $media = $total / count($vendas);
    $maior = max($vendas);

    echo "<h2>Resultado da Semana</h2>";
    echo "Total de vendas: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Média diária: R$ " . number_format($media, 2, ',', '.') . "<br>";
    echo "Maior valor de venda entre os dias: R$ " . number_format($maior, 2, ',', '.') . "<br>";
    echo "<br><a href='atividade11.html'>Voltar</a>";
} else {
    echo "Erro: formulário não enviado corretamente.";
}

?>
