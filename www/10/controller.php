<?php
if (isset($_POST['calcular_reserva'])) {
    $tipo = $_POST['tipo'];
    $temporada = $_POST['temporada'];
    $precoBase = floatval($_POST['precoBase']);

    echo "<p>Valor da reserva: R$ " . number_format(calcularReserva($tipo, $temporada, $precoBase), 2, ",", ".") . "</p>";
}

function calcularReserva($tipo, $temporada, $precoBase) {
    $taxasTemporada = ["baixa" => 0.5, "média" => 0.3, "alta" => 0.1];
    return $precoBase * (1 + ($taxasTemporada[$temporada] ?? 0));
}
?>
