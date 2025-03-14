<?php 

function calcularTarifaEnergia($consumo) {
    if ($consumo <= 100) {
        $tarifa = 0.60;
    } elseif ($consumo > 100 && $consumo <= 500) {
        $tarifa = 0.70;
    } else {
        $tarifa = 0.80;
    }

    return number_format($tarifa * $consumo, 2, ',', '.');
}

if (isset($_POST['calcular_tarifa'])) {
    $consumo = $_POST['consumo_energia'];
    echo "<p>Tarifa: R$ " . calcularTarifaEnergia($consumo) . "</p>";
}
?>