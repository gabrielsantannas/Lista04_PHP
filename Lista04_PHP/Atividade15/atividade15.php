<?php
session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = rand(1, 20);
    $_SESSION["tentativas"] = 0;
}

$chute = $_POST["chute"];
$_SESSION["tentativas"]++;

$numero = $_SESSION["numero"];

if ($chute < $numero) {
    echo "Tente um número maior que $chute.<br>";
} elseif ($chute > $numero) {
    echo "Tente um número menor que $chute.<br>";
} else {
    echo "Parabéns! Você acertou o número $numero!<br>";
    echo "Número de tentativas: " . $_SESSION["tentativas"];
    session_destroy();
    exit;
}
?>

<form method="post">
    <input type="number" name="chute" placeholder="Tente novamente" required>
    <input type="submit" value="Chutar">
</form>
