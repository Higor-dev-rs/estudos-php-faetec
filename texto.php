<?php 
$texto = $_GET['texto'] ?? '';

$maiusculo = strtoupper($texto);
$minusculo = strtolower($texto);
$tamanho = mb_strlen($texto);

echo "Texto original: $texto <br>";
echo "Texto maiúsculo: $maiusculo <br>";
echo "Texto minúsculo: $minusculo <br>";
echo "Tamanho do texto: $tamanho <br>";
?>