<?php
$n1 = $_GET['n1'] ?? '';
$n2 = $_GET['n2'] ?? '';

$soma = $n1 + $n2;
$sub = $n1 - $n2;
$mult = $n1 * $n2;


echo "soma: $soma <br>";
echo "subtração: $sub <br>";
echo "multiplicação: $mult <br>";

if ($n2 != 0) {
    $divisao = $n1 / $n2;
    echo "divisão: $divisao <br>";
} else {
    echo "<p style='color:red;'>Erro! (divisão por zero)</p>";
}
?>