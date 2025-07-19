<?php

do {
    $numero = $_POST["numero"];

    if ($numero >= 1 && $numero <= 10) {
        echo "Número informado: " . $numero;
    } else {
        echo "Número inválido! Digite um valor entre 1 e 10.<br>";
        echo '<form method="post">
                <input type="number" name="numero" required>
                <input type="submit" value="Tentar novamente">
              </form>';
        exit;
    }
} while ($numero < 1 || $numero > 10);

?>
