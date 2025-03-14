<?php
if(isset($_POST['idade'])){
    $idade = intval($_POST['idade']);
    classificarIdade($idade);
}

function classificarIdade($idade) {
    if ($idade <= 11) {
        echo '<p>Criança</p>';
    } elseif ($idade <= 17) {
        echo '<p>Adolescente</p>';
    } elseif ($idade <= 59) {
        echo '<p>Adulto</p>';
    } else {
        echo '<p>Idoso</p>';
    }
}