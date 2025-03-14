<?php
if(isset($_POST['salario'])){
    $salario = floatval($_POST['salario']);

    echo '<p>Imposto: ' . calcularImposto($salario). '</p>';
}

function calcularImposto($salario) {
    $faixas = [
        [2259.20, 0, 0],
        [2828.65, 0.075, 169.44],
        [3751.05, 0.15, 381.44],
        [4664.68, 0.225, 662.77],
        [PHP_INT_MAX, 0.275, 896.00]
    ];
    foreach ($faixas as [$limite, $aliquota, $deducao]) {
        if ($salario <= $limite) {
            return ($salario * $aliquota) - $deducao;
        }
    }
}