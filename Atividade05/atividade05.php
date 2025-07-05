<?php

$alunos = ['João', 'Maria', 'Pedro', 'Ana', 'Lucas'];

echo "Os alunos são: <br>";
echo "<ol>";
foreach ($alunos as $aluno) {
    echo "<li>" .  $aluno . "</li>" . "<br>";
}
echo "</ol>";
?>