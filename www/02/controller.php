<?php
function calcularDesconto($preco) {
    return ($preco > 200) ? $preco * 0.85 : $preco;
}

if (isset($_POST['calcular_desconto'])) {
    $preco = floatval($_POST['preco']);
    echo "<p>Preço final: R$ " . number_format(calcularDesconto($preco), 2, ',', '.') . "</p>";
}
?>
