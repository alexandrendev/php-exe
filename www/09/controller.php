<?php

if (isset($_POST['calcular_nota'])) {
    $provas = floatval($_POST['provas']);
    $trabalhos = floatval($_POST['trabalhos']);
    $participacao = floatval($_POST['participacao']);

    echo "<p>Resultado: " . calcularNotaFinal($provas, $trabalhos, $participacao) . "</p>";
}

function calcularNotaFinal($provas, $trabalhos, $participacao) {
    $notaFinal = ($provas * 2 + $trabalhos * 1 + $participacao * 0.5) / 3.5;

    if ($notaFinal >= 7) {
        return "Aprovado com nota: " . number_format($notaFinal, 2);
    } elseif ($notaFinal >= 5) {
        return "Recuperação com nota: " . number_format($notaFinal, 2);
    } else {
        return "Reprovado com nota: " . number_format($notaFinal, 2);
    }
}
