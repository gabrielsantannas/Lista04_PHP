<?php
session_start();

if (!isset($_SESSION['soma'])) {
    $_SESSION['soma'] = 0;
}

$numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

if ($numero === 0) {
    echo "Soma total dos números digitados: " . $_SESSION['soma'] . "<br>";
    session_destroy();
    echo "<a href='atividade07.html'>Reiniciar</a>";
    exit;
}

$_SESSION['soma'] += $numero;
echo "Soma parcial: " . $_SESSION['soma'] . "<br>";
echo "<a href='atividade07.html'>Continuar</a>";
?>
