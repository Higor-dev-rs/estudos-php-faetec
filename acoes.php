<?php

$produtos = [
    ["id" => 1, "nome" => "Notebook", "preco" => 3500],
    ["id" => 2, "nome" => "Smartphone", "preco" => 1200],
    ["id" => 3, "nome" => "Mouse Gamer", "preco" => 150]
];


$acao = $_GET['acao'] ?? 'listar';
$id   = $_GET['id'] ?? null;

echo "<h1>Sistema de Produtos</h1>";
echo "<nav><a href='?acao=listar'>Listar Todos</a></nav><hr>";

if ($acao == 'listar') {
    
    echo "<h3>Listagem de Produtos</h3>";
    foreach ($produtos as $p) {
        echo "ID: " . $p['id'] . " - " . $p['nome'] . " ";
        echo "<a href='?acao=buscar&id=" . $p['id'] . "'>Detalhes</a><br>";
    }

} elseif ($acao == 'buscar' && $id) {
    
    echo "<h3>Busca por ID: $id</h3>";
    $encontrado = null;
    
    foreach ($produtos as $p) {
        if ($p['id'] == $id) {
            $encontrado = $p;
            break;
        }
    }
    
    if ($encontrado) {
        echo "Nome: " . $encontrado['nome'] . "<br>";
        echo "Preço: R$ " . number_format($encontrado['preco'], 2, ',', '.');
    } else {
        echo "Produto não encontrado.";
    }

} else {
    echo "Ação inválida!";
}
?>