<?php
$idade = $_GET['idade'] ?? '';

if ($idade == '' || !is_numeric($idade)) {
    echo "<p style='color:red'>Por favor, informe uma idade válida via url (ex: ?idade=20)</p>";

} elseif ($idade < 0) {
    echo "<p style='color:red'>Idade inválida (Não pode ser negativa)</p>";

} elseif ($idade <= 12) {
    echo "Você é uma criança";
    
} elseif ($idade <= 17) {
    echo "Você é um adolescente";

} else {
    echo "Você já é adulto";
}
?>