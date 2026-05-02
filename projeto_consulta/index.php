<?php

$produtos = [
    ["id" => 1, "nome" => "Notebook", "preco" => 3500],
    ["id" => 2, "nome" => "Smartphone", "preco" => 1200]
];

echo "<h1>Lista de Produtos</h1>";
foreach ($produtos as $p) {
    echo "<p>";
    echo "Produto: " . $p['nome'] . " ";
    echo "<a href='consulta.php?id=" . $p['id'] . "'>Ver Detalhes</a>";
    echo "</p>";
}
?>