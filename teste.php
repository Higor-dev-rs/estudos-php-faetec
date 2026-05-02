<?php 
$nome = $_GET['nome'] ?? '';

if ($nome) {
    echo "Bem vindo, " . htmlspecialchars($nome);
} else {
    echo "Digite na URL: ";
    echo "<code>?nome=joao</code>";
}
?>