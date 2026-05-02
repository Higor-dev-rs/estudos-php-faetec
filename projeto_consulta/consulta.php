<?php
$produtos = [
    ["id" => 1, "nome" => "Notebook", "preco" => 3500, "desc" => "Intel i7, 16GB RAM"],
    ["id" => 2, "nome" => "Smartphone", "preco" => 1200, "desc" => "Tela 6.5, 128GB Storage"]
];

$id_escolhido = $_GET['id'] ?? null;
$produto_exibir = null;

foreach ($produtos as $p) {
    if ($p['id'] == $id_escolhido) {
        $produto_exibir = $p;
        break;
    }
}

if ($produto_exibir) {
    echo "<h1>Detalhes do Produto</h1>";
    echo "Nome: " . $produto_exibir['nome'] . "<br>";
    echo "Preço: R$ " . number_format($produto_exibir['preco'], 2, ',', '.') . "<br>";
    echo "Descrição: " . $produto_exibir['desc'] . "<br>";
} else {
    echo "Produto não encontrado.";
}

echo "<br><a href='index.php'>Voltar para a lista</a>";
?>