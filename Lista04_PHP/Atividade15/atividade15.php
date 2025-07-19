<?php
session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = rand(1, 20);
    $_SESSION["tentativas"] = 0;
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chute = $_POST["chute"];
    $_SESSION["tentativas"]++;


    $acertou = false;
    while (!$acertou) {
        if ($chute < $_SESSION["numero"]) {
            $mensagem = "Tente um número maior que $chute.";
            break;
        } elseif ($chute > $_SESSION["numero"]) {
            $mensagem = "Tente um número menor que $chute.";
            break;
        } else {
            $mensagem = "Parabéns! Você acertou o número {$_SESSION["numero"]} em {$_SESSION["tentativas"]} tentativas.";
            session_destroy();
            $acertou = true;
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Jogo da Adivinhação</title>
</head>
<body>
    <h2>Jogo da Adivinhação (1 a 20)</h2>

    <?php if (!empty($mensagem)) echo "<p>$mensagem</p>"; ?>

    <form method="post">
        <input type="number" name="chute" placeholder="Digite um número" required>
        <input type="submit" value="Chutar">
    </form>
</body>
</html>
