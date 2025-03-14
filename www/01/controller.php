<?php

function verificarParidade($numero) {
    return ($numero % 2 == 0) ? "Par" : "Ímpar";
}

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    echo "<p> O número $numero é " . verificarParidade($numero). "</p>";
}
?>