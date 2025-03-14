<?php

if (isset($_POST['calcular_tarifa'])) {
    $idade = intval($_POST['idade']);
    $tipo = htmlspecialchars($_POST['tipo']);

    echo calcularTarifa($idade, $tipo);
}

function calcularTarifa($idade, $tipo) {
    $precoBase = 4.00;

    if ($tipo == "Estudante") {
        $desconto = 0.50;
    } elseif ($idade >= 60) {
        $desconto = 0.40;
    } else {
        $desconto = 0;
    }

    $valorFinal = $precoBase * (1 - $desconto);
    return "<p>Valor da passagem: R$ " . number_format($valorFinal, 2, ",", ".") . "</p>";
}
