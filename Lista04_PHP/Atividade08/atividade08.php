<?php

if (isset($_POST['quantidade'])) {
    $quantidade = $_POST['quantidade']; 
    $soma = 0;  
    $contador = 1;  
    $media = 0;

    echo "<h2>Insira as notas:</h2>";
    echo "<form action='atividade08.php' method='post'>";
    
    do {
        echo "<label for='nota$contador'>Nota $contador: </label>";
        echo "<input type='number' step='0.1' name='nota$contador' required><br>";
        $contador++;
    } while ($contador <= $quantidade);

    echo "<input type='hidden' name='quantidade' value='$quantidade'>"; 
    echo "<button type='submit'>Calcular Média</button>";
    echo "</form>";
} 
elseif (isset($_POST['nota1'])) {
    $quantidade = $_POST['quantidade']; 
    $soma = 0;

    for ($i = 1; $i <= $quantidade; $i++) {
        $nota = $_POST["nota$i"];
        $soma += $nota;
    }

    $media = $soma / $quantidade;
    echo "A média das notas é: " . number_format($media, 2);
    echo "<a href='atividade08.html'>Voltar</a>";
}
?>