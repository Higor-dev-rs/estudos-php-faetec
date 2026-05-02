<?php
$categorias = [
    ["id" => 1, "nome" => "Informática"],
    ["id" => 2, "nome" => "Smartphone"]
];

$produtos = [
    ["id" => 1, "nome" => "Notebook", "categoria_id" => 1],
    ["id" => 2, "nome" => "Motorola g04", "categoria_id" => 2],
    ["id" => 3, "nome" => "Mouse Gamer", "categoria_id" => 1],
    ["id" => 4, "nome" => "iPhone 15", "categoria_id" => 2]
];

$filtro_categoria = $_GET['categoria'] ?? null;

echo "<h1>Lista de Produtos</h1>";

foreach ($produtos as $p) {
    if ($filtro_categoria == null || $p['categoria_id'] == $filtro_categoria) {
        echo "ID: " . $p['id'] . " - Nome: <b>" . $p['nome'] . "</b><br>";
    }
}

if ($filtro_categoria) {
    echo "<p><a href='?'>Limpar Filtro (Ver todos)</a></p>";
}
?>