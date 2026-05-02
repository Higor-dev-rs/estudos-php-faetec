<?php

$categorias = [
    ["id" => 1, "nome" => "Informática"],
    ["id" => 2, "nome" => "Smartphone"]
];

$produtos = [
    ["id" => 1, "nome" => "Notebook", "preco" => 3500.00, "categoria_id" => 1],
    ["id" => 2, "nome" => "Motorola g04", "preco" => 800.00, "categoria_id" => 2],
    ["id" => 3, "nome" => "Mouse Gamer", "preco" => 150.00, "categoria_id" => 1],
];

    $busca_id   = $_GET['id'] ?? null;
    $busca_nome = $_GET['nome'] ?? null;
    $filtro_cat = $_GET['categoria'] ?? null;

    usort($produtos, function($a, $b) {
        return $a['preco'] <=> $b['preco'];
    });

    foreach ($produtos as $p) {

        if ($busca_id && $p['id'] != $busca_id) {
            continue;
        }

        if ($busca_nome && mb_stripos($p['nome'], $busca_nome) === false) {
            continue;
        }

        if ($filtro_cat && $p['categoria_id'] != $filtro_cat) {
            continue;
        }

        $categoria_nome = "Desconhecida";
        foreach ($categorias as $c) {
            if ($p["categoria_id"] == $c["id"]) {
                $categoria_nome = $c["nome"];
                break; 
            }
        }

        echo "<h5>" . htmlspecialchars($p["nome"]) . "</h5>";
        echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
        echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";
    }
?>