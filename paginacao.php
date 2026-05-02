<?php

$produtos = [
    ["id" => 1, "nome" => "Notebook"],
    ["id" => 2, "nome" => "Smartphone"],
    ["id" => 3, "nome" => "Mouse"],
    ["id" => 4, "nome" => "Teclado"],
    ["id" => 5, "nome" => "Monitor"],
    ["id" => 6, "nome" => "Fone de Ouvido"]
];

$itens_por_pagina = 2;
$pagina_atual = $_GET['pagina'] ?? 1;

$inicio = ($pagina_atual - 1) * $itens_por_pagina;

$produtos_paginados = array_slice($produtos, $inicio, $itens_por_pagina);

echo "<h1>Página $pagina_atual</h1>";

foreach ($produtos_paginados as $p) {
    echo "ID: " . $p['id'] . " - Nome: " . $p['nome'] . "<br>";
}

$total_produtos = count($produtos);
$total_paginas = ceil($total_produtos / $itens_por_pagina);

echo "<hr>";
for ($i = 1; $i <= $total_paginas; $i++) {
    $estilo = ($i == $pagina_atual) ? "style='font-weight:bold;'" : "";
    echo "<a href='?pagina=$i' $estilo> $i </a> ";
}
?>