<?php

session_start();
if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = rand(1, 100);
}
function verificarPalpite($palpite) {
    $secreto = $_SESSION['numeroSecreto'];
    if ($palpite == $secreto) {
        unset($_SESSION['numeroSecreto']);
        return "Correto!";
    }
    return ($palpite > $secreto) ? "Muito alto" : "Muito baixo";
}

if (isset($_POST['verificar_palpite'])) echo "<p>Resultado: " . verificarPalpite($_POST['palpite']) . "</p>";

?>