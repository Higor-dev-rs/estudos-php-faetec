<?php

$categoria = [
    ["id" => 1, "nome" => "Informática"],
    ["id" => 2, "nome" => "Smartphone"]
];

$produtos = [
    ["id" => 1, "nome" => "Notebook", "categoria_id" => 1],
    ["id" =>2, "nome" => "Motorolag04", "categoria_id" => 2]
];

$id_procurado = $_GET['id'] ?? '';
$produto_final = null;
$nome_categoria = "Não encontrada";

foreach ($produtos as $p) {
    if ($p['id'] == $id_procurado) {
        $produto_final = $p;
        break;
    }
}

if ($produto_final) {
    foreach ($categorias as $cat) {
        if ($cat['id'] == $produto_final['categoria_id']) {
            $nome_categoria = $cat['nome'];
            break;
        }
    }

    // 3. Exibir os dados cruzados
    echo "<h2>Detalhes do Produto</h2>";
    echo "Produto: <b>" . $produto_final['nome'] . "</b><br>";
    echo "Categoria: <b>" . $nome_categoria . "</b>";
} else {
    echo "<p style='color:red'>Produto não encontrado!</p>";
}
?>
