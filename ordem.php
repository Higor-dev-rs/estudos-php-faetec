<?php

$produtos = [
    ["id" => 1, "nome" => "Notebook", "preco" => 3500.00, "categoria_id" => 1],
    ["id" => 2, "nome" => "Motorola g04", "preco" => 800.00, "categoria_id" => 2],
    ["id" => 3, "nome" => "Mouse Gamer", "preco" => 150.00, "categoria_id" => 1],
];

$categorias = [
    ["id" => 1, "nome" => "Informática"],
    ["id" => 2, "nome" => "Smartphone"]
];

$ordem = $_GET['ordem'] ?? 'nome';

usort($produtos, function($a, $b) use ($ordem) {
    if ($ordem == 'preco') {
        return $a['preco'] <=> $b['preco'];
    } else {
        return strcmp($a['nome'], $b['nome']);
    }
});

$filtro_categoria = $_GET['categoria'] ?? null;

echo "<h2>Lista de Produtos</h2>";
foreach ($produtos as $p) {
    if ($filtro_categoria && $p["categoria_id"] != $filtro_categoria) {
        continue; 
    }

    $categoria_nome = "Desconhecida";
    foreach ($categorias as $c) {
        if ($p["categoria_id"] == $c["id"]) {
            $categoria_nome = $c["nome"];
            break;
        }
    }

    echo "Nome: " . htmlspecialchars($p["nome"]) . " - ";
    echo "Preço: R$ " . number_format($p["preco"], 2, ',', '.') . " - ";
    echo "Categoria: " . htmlspecialchars($categoria_nome) . "<br>";
}
?>