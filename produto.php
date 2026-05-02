<?php

$produtos = [
    ["id" => 1, "nome" => "Celular", "preco" => 1100.00],
    ["id" => 2, "nome" => "Notebook", "preco" => 3500.00],
    ["id" => 3, "nome" => "Mouse", "preco" => 50.00],
    ["id" => 4, "nome" => "Tablet", "preco" => 900.00]
];


$id_procurado = $_GET['id'] ?? '';


$produto_encontrado = null;

foreach ($produtos as $item) {
    if ($item['id'] == $id_procurado) {
        $produto_encontrado = $item;
        break;
    }
}

if ($produto_encontrado) {
    echo "<h1>Produto Encontrado</h1>";
    echo "Nome: " . $produto_encontrado['nome'] . "<br>";
    echo "Preço: R$ " . number_format($produto_encontrado['preco'], 2, ',', '.');
} else {
    echo "<p style='color:red;'>Erro: Produto com ID $id_procurado não existe!</p>";
}
?>